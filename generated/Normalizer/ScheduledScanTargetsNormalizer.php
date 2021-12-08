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
class ScheduledScanTargetsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Rapid7\\InsightVM\\Api\\Model\\ScheduledScanTargets';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Rapid7\\InsightVM\\Api\\Model\\ScheduledScanTargets';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Rapid7\InsightVM\Api\Model\ScheduledScanTargets();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('excludedAssetGroups', $data)) {
            $object->setExcludedAssetGroups($this->denormalizer->denormalize($data['excludedAssetGroups'], 'Rapid7\\InsightVM\\Api\\Model\\ExcludedAssetGroups', 'json', $context));
        }
        if (\array_key_exists('excludedTargets', $data)) {
            $object->setExcludedTargets($this->denormalizer->denormalize($data['excludedTargets'], 'Rapid7\\InsightVM\\Api\\Model\\ExcludedScanTargets', 'json', $context));
        }
        if (\array_key_exists('includedAssetGroups', $data)) {
            $object->setIncludedAssetGroups($this->denormalizer->denormalize($data['includedAssetGroups'], 'Rapid7\\InsightVM\\Api\\Model\\IncludedAssetGroups', 'json', $context));
        }
        if (\array_key_exists('includedTargets', $data)) {
            $object->setIncludedTargets($this->denormalizer->denormalize($data['includedTargets'], 'Rapid7\\InsightVM\\Api\\Model\\IncludedScanTargets', 'json', $context));
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getExcludedAssetGroups()) {
            $data['excludedAssetGroups'] = $this->normalizer->normalize($object->getExcludedAssetGroups(), 'json', $context);
        }
        if (null !== $object->getExcludedTargets()) {
            $data['excludedTargets'] = $this->normalizer->normalize($object->getExcludedTargets(), 'json', $context);
        }
        if (null !== $object->getIncludedAssetGroups()) {
            $data['includedAssetGroups'] = $this->normalizer->normalize($object->getIncludedAssetGroups(), 'json', $context);
        }
        if (null !== $object->getIncludedTargets()) {
            $data['includedTargets'] = $this->normalizer->normalize($object->getIncludedTargets(), 'json', $context);
        }
        return $data;
    }
}