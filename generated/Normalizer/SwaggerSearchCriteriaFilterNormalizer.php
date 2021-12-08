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
class SwaggerSearchCriteriaFilterNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Rapid7\\InsightVM\\Api\\Model\\SwaggerSearchCriteriaFilter';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Rapid7\\InsightVM\\Api\\Model\\SwaggerSearchCriteriaFilter';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Rapid7\InsightVM\Api\Model\SwaggerSearchCriteriaFilter();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('field', $data)) {
            $object->setField($data['field']);
        }
        if (\array_key_exists('lower', $data)) {
            $object->setLower($data['lower']);
        }
        if (\array_key_exists('operator', $data)) {
            $object->setOperator($data['operator']);
        }
        if (\array_key_exists('upper', $data)) {
            $object->setUpper($data['upper']);
        }
        if (\array_key_exists('value', $data)) {
            $object->setValue($data['value']);
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
        if (null !== $object->getField()) {
            $data['field'] = $object->getField();
        }
        if (null !== $object->getLower()) {
            $data['lower'] = $object->getLower();
        }
        if (null !== $object->getOperator()) {
            $data['operator'] = $object->getOperator();
        }
        if (null !== $object->getUpper()) {
            $data['upper'] = $object->getUpper();
        }
        if (null !== $object->getValue()) {
            $data['value'] = $object->getValue();
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