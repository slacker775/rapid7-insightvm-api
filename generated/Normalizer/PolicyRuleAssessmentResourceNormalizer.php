<?php

namespace Rapid7\InsightVM\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Rapid7\InsightVM\Api\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class PolicyRuleAssessmentResourceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Rapid7\\InsightVM\\Api\\Model\\PolicyRuleAssessmentResource';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Rapid7\\InsightVM\\Api\\Model\\PolicyRuleAssessmentResource';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Rapid7\InsightVM\Api\Model\PolicyRuleAssessmentResource();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('links', $data)) {
            $values = array();
            foreach ($data['links'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Rapid7\\InsightVM\\Api\\Model\\Link', 'json', $context);
            }
            $object->setLinks($values);
        }
        if (\array_key_exists('total', $data)) {
            $object->setTotal($data['total']);
        }
        if (\array_key_exists('totalFailed', $data)) {
            $object->setTotalFailed($data['totalFailed']);
        }
        if (\array_key_exists('totalNotApplicable', $data)) {
            $object->setTotalNotApplicable($data['totalNotApplicable']);
        }
        if (\array_key_exists('totalPassed', $data)) {
            $object->setTotalPassed($data['totalPassed']);
        }
        if (\array_key_exists('unscored', $data)) {
            $object->setUnscored($data['unscored']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getTotal()) {
            $data['total'] = $object->getTotal();
        }
        if (null !== $object->getTotalFailed()) {
            $data['totalFailed'] = $object->getTotalFailed();
        }
        if (null !== $object->getTotalNotApplicable()) {
            $data['totalNotApplicable'] = $object->getTotalNotApplicable();
        }
        if (null !== $object->getTotalPassed()) {
            $data['totalPassed'] = $object->getTotalPassed();
        }
        if (null !== $object->getUnscored()) {
            $data['unscored'] = $object->getUnscored();
        }
        return $data;
    }
}