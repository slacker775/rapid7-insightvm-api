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
class ScanTemplateDiscoveryPerformanceTimeoutNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Rapid7\\InsightVM\\Api\\Model\\ScanTemplateDiscoveryPerformanceTimeout';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Rapid7\\InsightVM\\Api\\Model\\ScanTemplateDiscoveryPerformanceTimeout';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Rapid7\InsightVM\Api\Model\ScanTemplateDiscoveryPerformanceTimeout();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('initial', $data)) {
            $object->setInitial($data['initial']);
        }
        if (\array_key_exists('maximum', $data)) {
            $object->setMaximum($data['maximum']);
        }
        if (\array_key_exists('minimum', $data)) {
            $object->setMinimum($data['minimum']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getInitial()) {
            $data['initial'] = $object->getInitial();
        }
        if (null !== $object->getMaximum()) {
            $data['maximum'] = $object->getMaximum();
        }
        if (null !== $object->getMinimum()) {
            $data['minimum'] = $object->getMinimum();
        }
        return $data;
    }
}