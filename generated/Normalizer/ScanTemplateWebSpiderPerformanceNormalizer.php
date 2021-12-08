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
class ScanTemplateWebSpiderPerformanceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Rapid7\\InsightVM\\Api\\Model\\ScanTemplateWebSpiderPerformance';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Rapid7\\InsightVM\\Api\\Model\\ScanTemplateWebSpiderPerformance';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Rapid7\InsightVM\Api\Model\ScanTemplateWebSpiderPerformance();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('httpDaemonsToSkip', $data)) {
            $values = array();
            foreach ($data['httpDaemonsToSkip'] as $value) {
                $values[] = $value;
            }
            $object->setHttpDaemonsToSkip($values);
        }
        if (\array_key_exists('maximumDirectoryLevels', $data)) {
            $object->setMaximumDirectoryLevels($data['maximumDirectoryLevels']);
        }
        if (\array_key_exists('maximumForeignHosts', $data)) {
            $object->setMaximumForeignHosts($data['maximumForeignHosts']);
        }
        if (\array_key_exists('maximumLinkDepth', $data)) {
            $object->setMaximumLinkDepth($data['maximumLinkDepth']);
        }
        if (\array_key_exists('maximumPages', $data)) {
            $object->setMaximumPages($data['maximumPages']);
        }
        if (\array_key_exists('maximumRetries', $data)) {
            $object->setMaximumRetries($data['maximumRetries']);
        }
        if (\array_key_exists('maximumTime', $data)) {
            $object->setMaximumTime($data['maximumTime']);
        }
        if (\array_key_exists('responseTimeout', $data)) {
            $object->setResponseTimeout($data['responseTimeout']);
        }
        if (\array_key_exists('threadsPerServer', $data)) {
            $object->setThreadsPerServer($data['threadsPerServer']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getHttpDaemonsToSkip()) {
            $values = array();
            foreach ($object->getHttpDaemonsToSkip() as $value) {
                $values[] = $value;
            }
            $data['httpDaemonsToSkip'] = $values;
        }
        if (null !== $object->getMaximumDirectoryLevels()) {
            $data['maximumDirectoryLevels'] = $object->getMaximumDirectoryLevels();
        }
        if (null !== $object->getMaximumForeignHosts()) {
            $data['maximumForeignHosts'] = $object->getMaximumForeignHosts();
        }
        if (null !== $object->getMaximumLinkDepth()) {
            $data['maximumLinkDepth'] = $object->getMaximumLinkDepth();
        }
        if (null !== $object->getMaximumPages()) {
            $data['maximumPages'] = $object->getMaximumPages();
        }
        if (null !== $object->getMaximumRetries()) {
            $data['maximumRetries'] = $object->getMaximumRetries();
        }
        if (null !== $object->getMaximumTime()) {
            $data['maximumTime'] = $object->getMaximumTime();
        }
        if (null !== $object->getResponseTimeout()) {
            $data['responseTimeout'] = $object->getResponseTimeout();
        }
        if (null !== $object->getThreadsPerServer()) {
            $data['threadsPerServer'] = $object->getThreadsPerServer();
        }
        return $data;
    }
}