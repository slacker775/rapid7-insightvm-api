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
class PolicyOverrideScopeNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Rapid7\\InsightVM\\Api\\Model\\PolicyOverrideScope';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Rapid7\\InsightVM\\Api\\Model\\PolicyOverrideScope';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Rapid7\InsightVM\Api\Model\PolicyOverrideScope();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('asset', $data)) {
            $object->setAsset($data['asset']);
        }
        if (\array_key_exists('links', $data)) {
            $values = array();
            foreach ($data['links'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Rapid7\\InsightVM\\Api\\Model\\Link', 'json', $context);
            }
            $object->setLinks($values);
        }
        if (\array_key_exists('newResult', $data)) {
            $object->setNewResult($data['newResult']);
        }
        if (\array_key_exists('originalResult', $data)) {
            $object->setOriginalResult($data['originalResult']);
        }
        if (\array_key_exists('rule', $data)) {
            $object->setRule($data['rule']);
        }
        if (\array_key_exists('type', $data)) {
            $object->setType($data['type']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getAsset()) {
            $data['asset'] = $object->getAsset();
        }
        if (null !== $object->getLinks()) {
            $values = array();
            foreach ($object->getLinks() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['links'] = $values;
        }
        $data['newResult'] = $object->getNewResult();
        $data['rule'] = $object->getRule();
        $data['type'] = $object->getType();
        return $data;
    }
}