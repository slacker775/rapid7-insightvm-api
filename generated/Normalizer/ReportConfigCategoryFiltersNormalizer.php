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
class ReportConfigCategoryFiltersNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Rapid7\\InsightVM\\Api\\Model\\ReportConfigCategoryFilters';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Rapid7\\InsightVM\\Api\\Model\\ReportConfigCategoryFilters';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Rapid7\InsightVM\Api\Model\ReportConfigCategoryFilters();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('excluded', $data)) {
            $values = array();
            foreach ($data['excluded'] as $value) {
                $values[] = $value;
            }
            $object->setExcluded($values);
        }
        if (\array_key_exists('included', $data)) {
            $values_1 = array();
            foreach ($data['included'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setIncluded($values_1);
        }
        if (\array_key_exists('links', $data)) {
            $values_2 = array();
            foreach ($data['links'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, 'Rapid7\\InsightVM\\Api\\Model\\Link', 'json', $context);
            }
            $object->setLinks($values_2);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getExcluded()) {
            $values = array();
            foreach ($object->getExcluded() as $value) {
                $values[] = $value;
            }
            $data['excluded'] = $values;
        }
        if (null !== $object->getIncluded()) {
            $values_1 = array();
            foreach ($object->getIncluded() as $value_1) {
                $values_1[] = $value_1;
            }
            $data['included'] = $values_1;
        }
        if (null !== $object->getLinks()) {
            $values_2 = array();
            foreach ($object->getLinks() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $data['links'] = $values_2;
        }
        return $data;
    }
}