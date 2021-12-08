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
class CriterionNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Rapid7\\InsightVM\\Api\\Model\\Criterion';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Rapid7\\InsightVM\\Api\\Model\\Criterion';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Rapid7\InsightVM\Api\Model\Criterion();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('extras', $data)) {
            $object->setExtras($this->denormalizer->denormalize($data['extras'], 'Rapid7\\InsightVM\\Api\\Model\\CriterionExtras', 'json', $context));
        }
        if (\array_key_exists('metaData', $data)) {
            $object->setMetaData($this->denormalizer->denormalize($data['metaData'], 'Rapid7\\InsightVM\\Api\\Model\\IMetaData', 'json', $context));
        }
        if (\array_key_exists('metadata', $data)) {
            $object->setMetadata2($this->denormalizer->denormalize($data['metadata'], 'Rapid7\\InsightVM\\Api\\Model\\MetadataContainer', 'json', $context));
        }
        if (\array_key_exists('operator', $data)) {
            $object->setOperator($data['operator']);
        }
        if (\array_key_exists('values', $data)) {
            $values = array();
            foreach ($data['values'] as $value) {
                $values[] = $value;
            }
            $object->setValues($values);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getExtras()) {
            $data['extras'] = $this->normalizer->normalize($object->getExtras(), 'json', $context);
        }
        if (null !== $object->getMetaData()) {
            $data['metaData'] = $this->normalizer->normalize($object->getMetaData(), 'json', $context);
        }
        if (null !== $object->getMetadata2()) {
            $data['metadata'] = $this->normalizer->normalize($object->getMetadata2(), 'json', $context);
        }
        if (null !== $object->getOperator()) {
            $data['operator'] = $object->getOperator();
        }
        if (null !== $object->getValues()) {
            $values = array();
            foreach ($object->getValues() as $value) {
                $values[] = $value;
            }
            $data['values'] = $values;
        }
        return $data;
    }
}