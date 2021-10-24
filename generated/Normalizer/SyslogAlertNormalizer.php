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
class SyslogAlertNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Rapid7\\InsightVM\\Api\\Model\\SyslogAlert';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Rapid7\\InsightVM\\Api\\Model\\SyslogAlert';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Rapid7\InsightVM\Api\Model\SyslogAlert();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('enabled', $data)) {
            $object->setEnabled($data['enabled']);
        }
        if (\array_key_exists('enabledScanEvents', $data)) {
            $object->setEnabledScanEvents($this->denormalizer->denormalize($data['enabledScanEvents'], 'Rapid7\\InsightVM\\Api\\Model\\ScanEvents', 'json', $context));
        }
        if (\array_key_exists('enabledVulnerabilityEvents', $data)) {
            $object->setEnabledVulnerabilityEvents($this->denormalizer->denormalize($data['enabledVulnerabilityEvents'], 'Rapid7\\InsightVM\\Api\\Model\\VulnerabilityEvents', 'json', $context));
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (\array_key_exists('links', $data)) {
            $values = array();
            foreach ($data['links'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Rapid7\\InsightVM\\Api\\Model\\Link', 'json', $context);
            }
            $object->setLinks($values);
        }
        if (\array_key_exists('maximumAlerts', $data)) {
            $object->setMaximumAlerts($data['maximumAlerts']);
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
        }
        if (\array_key_exists('notification', $data)) {
            $object->setNotification($data['notification']);
        }
        if (\array_key_exists('server', $data)) {
            $object->setServer($data['server']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['enabled'] = $object->getEnabled();
        if (null !== $object->getEnabledScanEvents()) {
            $data['enabledScanEvents'] = $this->normalizer->normalize($object->getEnabledScanEvents(), 'json', $context);
        }
        if (null !== $object->getEnabledVulnerabilityEvents()) {
            $data['enabledVulnerabilityEvents'] = $this->normalizer->normalize($object->getEnabledVulnerabilityEvents(), 'json', $context);
        }
        if (null !== $object->getId()) {
            $data['id'] = $object->getId();
        }
        if (null !== $object->getLinks()) {
            $values = array();
            foreach ($object->getLinks() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['links'] = $values;
        }
        if (null !== $object->getMaximumAlerts()) {
            $data['maximumAlerts'] = $object->getMaximumAlerts();
        }
        $data['name'] = $object->getName();
        $data['notification'] = $object->getNotification();
        $data['server'] = $object->getServer();
        return $data;
    }
}