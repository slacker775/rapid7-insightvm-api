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
class ScanSettingsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Rapid7\\InsightVM\\Api\\Model\\ScanSettings';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Rapid7\\InsightVM\\Api\\Model\\ScanSettings';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Rapid7\InsightVM\Api\Model\ScanSettings();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('connectionTimeout', $data)) {
            $object->setConnectionTimeout($data['connectionTimeout']);
        }
        if (\array_key_exists('incremental', $data)) {
            $object->setIncremental($data['incremental']);
        }
        if (\array_key_exists('maximumThreads', $data)) {
            $object->setMaximumThreads($data['maximumThreads']);
        }
        if (\array_key_exists('readTimeout', $data)) {
            $object->setReadTimeout($data['readTimeout']);
        }
        if (\array_key_exists('statusIdleTimeout', $data)) {
            $object->setStatusIdleTimeout($data['statusIdleTimeout']);
        }
        if (\array_key_exists('statusThreads', $data)) {
            $object->setStatusThreads($data['statusThreads']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getConnectionTimeout()) {
            $data['connectionTimeout'] = $object->getConnectionTimeout();
        }
        if (null !== $object->getIncremental()) {
            $data['incremental'] = $object->getIncremental();
        }
        if (null !== $object->getMaximumThreads()) {
            $data['maximumThreads'] = $object->getMaximumThreads();
        }
        if (null !== $object->getReadTimeout()) {
            $data['readTimeout'] = $object->getReadTimeout();
        }
        if (null !== $object->getStatusIdleTimeout()) {
            $data['statusIdleTimeout'] = $object->getStatusIdleTimeout();
        }
        if (null !== $object->getStatusThreads()) {
            $data['statusThreads'] = $object->getStatusThreads();
        }
        return $data;
    }
}