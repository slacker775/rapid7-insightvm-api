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
class ReportConfigFiltersResourceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Rapid7\\InsightVM\\Api\\Model\\ReportConfigFiltersResource';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Rapid7\\InsightVM\\Api\\Model\\ReportConfigFiltersResource';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Rapid7\InsightVM\Api\Model\ReportConfigFiltersResource();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('categories', $data)) {
            $object->setCategories($this->denormalizer->denormalize($data['categories'], 'Rapid7\\InsightVM\\Api\\Model\\ReportConfigCategoryFilters', 'json', $context));
        }
        if (\array_key_exists('severity', $data)) {
            $object->setSeverity($data['severity']);
        }
        if (\array_key_exists('statuses', $data)) {
            $values = array();
            foreach ($data['statuses'] as $value) {
                $values[] = $value;
            }
            $object->setStatuses($values);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getCategories()) {
            $data['categories'] = $this->normalizer->normalize($object->getCategories(), 'json', $context);
        }
        if (null !== $object->getSeverity()) {
            $data['severity'] = $object->getSeverity();
        }
        if (null !== $object->getStatuses()) {
            $values = array();
            foreach ($object->getStatuses() as $value) {
                $values[] = $value;
            }
            $data['statuses'] = $values;
        }
        return $data;
    }
}