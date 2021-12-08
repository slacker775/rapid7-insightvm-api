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
class ScanEventsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Rapid7\\InsightVM\\Api\\Model\\ScanEvents';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Rapid7\\InsightVM\\Api\\Model\\ScanEvents';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Rapid7\InsightVM\Api\Model\ScanEvents();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('failed', $data)) {
            $object->setFailed($data['failed']);
        }
        if (\array_key_exists('paused', $data)) {
            $object->setPaused($data['paused']);
        }
        if (\array_key_exists('resumed', $data)) {
            $object->setResumed($data['resumed']);
        }
        if (\array_key_exists('started', $data)) {
            $object->setStarted($data['started']);
        }
        if (\array_key_exists('stopped', $data)) {
            $object->setStopped($data['stopped']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['failed'] = $object->getFailed();
        $data['paused'] = $object->getPaused();
        if (null !== $object->getResumed()) {
            $data['resumed'] = $object->getResumed();
        }
        $data['started'] = $object->getStarted();
        $data['stopped'] = $object->getStopped();
        return $data;
    }
}