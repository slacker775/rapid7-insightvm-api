<?php

namespace Rapid7\InsightVM\Api\Normalizer;

use Jane\JsonSchemaRuntime\Reference;
use Rapid7\InsightVM\Api\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class LicenseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Rapid7\\InsightVM\\Api\\Model\\License';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Rapid7\\InsightVM\\Api\\Model\\License';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Rapid7\InsightVM\Api\Model\License();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('edition', $data)) {
            $object->setEdition($data['edition']);
        }
        if (\array_key_exists('evaluation', $data)) {
            $object->setEvaluation($data['evaluation']);
        }
        if (\array_key_exists('expires', $data)) {
            $object->setExpires(\DateTime::createFromFormat('Y-m-d\\TH:i:s.vP', $data['expires']));
        }
        if (\array_key_exists('features', $data)) {
            $object->setFeatures($this->denormalizer->denormalize($data['features'], 'Rapid7\\InsightVM\\Api\\Model\\Features', 'json', $context));
        }
        if (\array_key_exists('limits', $data)) {
            $object->setLimits($this->denormalizer->denormalize($data['limits'], 'Rapid7\\InsightVM\\Api\\Model\\LicenseLimits', 'json', $context));
        }
        if (\array_key_exists('links', $data)) {
            $values = array();
            foreach ($data['links'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Rapid7\\InsightVM\\Api\\Model\\Link', 'json', $context);
            }
            $object->setLinks($values);
        }
        if (\array_key_exists('perpetual', $data)) {
            $object->setPerpetual($data['perpetual']);
        }
        if (\array_key_exists('status', $data)) {
            $object->setStatus($data['status']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getEdition()) {
            $data['edition'] = $object->getEdition();
        }
        if (null !== $object->getEvaluation()) {
            $data['evaluation'] = $object->getEvaluation();
        }
        if (null !== $object->getExpires()) {
            $data['expires'] = $object->getExpires()->format('Y-m-d\\TH:i:s.vP');
        }
        if (null !== $object->getFeatures()) {
            $data['features'] = $this->normalizer->normalize($object->getFeatures(), 'json', $context);
        }
        if (null !== $object->getLimits()) {
            $data['limits'] = $this->normalizer->normalize($object->getLimits(), 'json', $context);
        }
        if (null !== $object->getPerpetual()) {
            $data['perpetual'] = $object->getPerpetual();
        }
        if (null !== $object->getStatus()) {
            $data['status'] = $object->getStatus();
        }
        return $data;
    }
}