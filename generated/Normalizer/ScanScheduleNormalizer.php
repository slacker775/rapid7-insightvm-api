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
class ScanScheduleNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Rapid7\\InsightVM\\Api\\Model\\ScanSchedule';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Rapid7\\InsightVM\\Api\\Model\\ScanSchedule';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Rapid7\InsightVM\Api\Model\ScanSchedule();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('assets', $data)) {
            $object->setAssets($this->denormalizer->denormalize($data['assets'], 'Rapid7\\InsightVM\\Api\\Model\\ScheduledScanTargets', 'json', $context));
        }
        if (\array_key_exists('duration', $data)) {
            $object->setDuration($data['duration']);
        }
        if (\array_key_exists('enabled', $data)) {
            $object->setEnabled($data['enabled']);
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
        if (\array_key_exists('nextRuntimes', $data)) {
            $values_1 = array();
            foreach ($data['nextRuntimes'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setNextRuntimes($values_1);
        }
        if (\array_key_exists('onScanRepeat', $data)) {
            $object->setOnScanRepeat($data['onScanRepeat']);
        }
        if (\array_key_exists('repeat', $data)) {
            $object->setRepeat($this->denormalizer->denormalize($data['repeat'], 'Rapid7\\InsightVM\\Api\\Model\\RepeatResource', 'json', $context));
        }
        if (\array_key_exists('scanEngineId', $data)) {
            $object->setScanEngineId($data['scanEngineId']);
        }
        if (\array_key_exists('scanName', $data)) {
            $object->setScanName($data['scanName']);
        }
        if (\array_key_exists('scanTemplateId', $data)) {
            $object->setScanTemplateId($data['scanTemplateId']);
        }
        if (\array_key_exists('start', $data)) {
            $object->setStart($data['start']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getAssets()) {
            $data['assets'] = $this->normalizer->normalize($object->getAssets(), 'json', $context);
        }
        if (null !== $object->getDuration()) {
            $data['duration'] = $object->getDuration();
        }
        $data['enabled'] = $object->getEnabled();
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
        $data['onScanRepeat'] = $object->getOnScanRepeat();
        if (null !== $object->getRepeat()) {
            $data['repeat'] = $this->normalizer->normalize($object->getRepeat(), 'json', $context);
        }
        if (null !== $object->getScanEngineId()) {
            $data['scanEngineId'] = $object->getScanEngineId();
        }
        if (null !== $object->getScanName()) {
            $data['scanName'] = $object->getScanName();
        }
        if (null !== $object->getScanTemplateId()) {
            $data['scanTemplateId'] = $object->getScanTemplateId();
        }
        $data['start'] = $object->getStart();
        return $data;
    }
}