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
class PolicySummaryResourceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Rapid7\\InsightVM\\Api\\Model\\PolicySummaryResource';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Rapid7\\InsightVM\\Api\\Model\\PolicySummaryResource';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Rapid7\InsightVM\Api\Model\PolicySummaryResource();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('decreasedCompliance', $data)) {
            $object->setDecreasedCompliance($data['decreasedCompliance']);
        }
        if (\array_key_exists('increasedCompliance', $data)) {
            $object->setIncreasedCompliance($data['increasedCompliance']);
        }
        if (\array_key_exists('links', $data)) {
            $values = array();
            foreach ($data['links'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Rapid7\\InsightVM\\Api\\Model\\Link', 'json', $context);
            }
            $object->setLinks($values);
        }
        if (\array_key_exists('numberOfPolicies', $data)) {
            $object->setNumberOfPolicies($data['numberOfPolicies']);
        }
        if (\array_key_exists('overallCompliance', $data)) {
            $object->setOverallCompliance($data['overallCompliance']);
        }
        if (\array_key_exists('scannedPolicies', $data)) {
            $object->setScannedPolicies($data['scannedPolicies']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getDecreasedCompliance()) {
            $data['decreasedCompliance'] = $object->getDecreasedCompliance();
        }
        if (null !== $object->getIncreasedCompliance()) {
            $data['increasedCompliance'] = $object->getIncreasedCompliance();
        }
        if (null !== $object->getNumberOfPolicies()) {
            $data['numberOfPolicies'] = $object->getNumberOfPolicies();
        }
        if (null !== $object->getOverallCompliance()) {
            $data['overallCompliance'] = $object->getOverallCompliance();
        }
        if (null !== $object->getScannedPolicies()) {
            $data['scannedPolicies'] = $object->getScannedPolicies();
        }
        return $data;
    }
}