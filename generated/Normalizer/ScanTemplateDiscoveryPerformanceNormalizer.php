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
class ScanTemplateDiscoveryPerformanceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Rapid7\\InsightVM\\Api\\Model\\ScanTemplateDiscoveryPerformance';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Rapid7\\InsightVM\\Api\\Model\\ScanTemplateDiscoveryPerformance';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Rapid7\InsightVM\Api\Model\ScanTemplateDiscoveryPerformance();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('packetRate', $data)) {
            $object->setPacketRate($this->denormalizer->denormalize($data['packetRate'], 'Rapid7\\InsightVM\\Api\\Model\\ScanTemplateDiscoveryPerformancePacketsRate', 'json', $context));
        }
        if (\array_key_exists('parallelism', $data)) {
            $object->setParallelism($this->denormalizer->denormalize($data['parallelism'], 'Rapid7\\InsightVM\\Api\\Model\\ScanTemplateDiscoveryPerformanceParallelism', 'json', $context));
        }
        if (\array_key_exists('retryLimit', $data)) {
            $object->setRetryLimit($data['retryLimit']);
        }
        if (\array_key_exists('scanDelay', $data)) {
            $object->setScanDelay($this->denormalizer->denormalize($data['scanDelay'], 'Rapid7\\InsightVM\\Api\\Model\\ScanTemplateDiscoveryPerformanceScanDelay', 'json', $context));
        }
        if (\array_key_exists('timeout', $data)) {
            $object->setTimeout($this->denormalizer->denormalize($data['timeout'], 'Rapid7\\InsightVM\\Api\\Model\\ScanTemplateDiscoveryPerformanceTimeout', 'json', $context));
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getPacketRate()) {
            $data['packetRate'] = $this->normalizer->normalize($object->getPacketRate(), 'json', $context);
        }
        if (null !== $object->getParallelism()) {
            $data['parallelism'] = $this->normalizer->normalize($object->getParallelism(), 'json', $context);
        }
        if (null !== $object->getRetryLimit()) {
            $data['retryLimit'] = $object->getRetryLimit();
        }
        if (null !== $object->getScanDelay()) {
            $data['scanDelay'] = $this->normalizer->normalize($object->getScanDelay(), 'json', $context);
        }
        if (null !== $object->getTimeout()) {
            $data['timeout'] = $this->normalizer->normalize($object->getTimeout(), 'json', $context);
        }
        return $data;
    }
}