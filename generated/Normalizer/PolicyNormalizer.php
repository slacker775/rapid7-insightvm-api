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
class PolicyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Rapid7\\InsightVM\\Api\\Model\\Policy';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Rapid7\\InsightVM\\Api\\Model\\Policy';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Rapid7\InsightVM\Api\Model\Policy();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('enabled', $data)) {
            $values = array();
            foreach ($data['enabled'] as $value) {
                $values[] = $value;
            }
            $object->setEnabled($values);
        }
        if (\array_key_exists('links', $data)) {
            $values_1 = array();
            foreach ($data['links'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Rapid7\\InsightVM\\Api\\Model\\Link', 'json', $context);
            }
            $object->setLinks($values_1);
        }
        if (\array_key_exists('recursiveWindowsFSSearch', $data)) {
            $object->setRecursiveWindowsFSSearch($data['recursiveWindowsFSSearch']);
        }
        if (\array_key_exists('storeSCAP', $data)) {
            $object->setStoreSCAP($data['storeSCAP']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getEnabled()) {
            $values = array();
            foreach ($object->getEnabled() as $value) {
                $values[] = $value;
            }
            $data['enabled'] = $values;
        }
        if (null !== $object->getRecursiveWindowsFSSearch()) {
            $data['recursiveWindowsFSSearch'] = $object->getRecursiveWindowsFSSearch();
        }
        if (null !== $object->getStoreSCAP()) {
            $data['storeSCAP'] = $object->getStoreSCAP();
        }
        return $data;
    }
}