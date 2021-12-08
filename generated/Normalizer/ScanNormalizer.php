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
class ScanNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Rapid7\\InsightVM\\Api\\Model\\Scan';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Rapid7\\InsightVM\\Api\\Model\\Scan';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Rapid7\InsightVM\Api\Model\Scan();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('assets', $data)) {
            $object->setAssets($data['assets']);
        }
        if (\array_key_exists('duration', $data)) {
            $object->setDuration($data['duration']);
        }
        if (\array_key_exists('endTime', $data)) {
            $object->setEndTime($data['endTime']);
        }
        if (\array_key_exists('engineId', $data)) {
            $object->setEngineId($data['engineId']);
        }
        if (\array_key_exists('engineName', $data)) {
            $object->setEngineName($data['engineName']);
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
        if (\array_key_exists('message', $data)) {
            $object->setMessage($data['message']);
        }
        if (\array_key_exists('scanName', $data)) {
            $object->setScanName($data['scanName']);
        }
        if (\array_key_exists('scanType', $data)) {
            $object->setScanType($data['scanType']);
        }
        if (\array_key_exists('startTime', $data)) {
            $object->setStartTime($data['startTime']);
        }
        if (\array_key_exists('startedBy', $data)) {
            $object->setStartedBy($data['startedBy']);
        }
        if (\array_key_exists('status', $data)) {
            $object->setStatus($data['status']);
        }
        if (\array_key_exists('vulnerabilities', $data)) {
            $object->setVulnerabilities($this->denormalizer->denormalize($data['vulnerabilities'], 'Rapid7\\InsightVM\\Api\\Model\\Vulnerabilities', 'json', $context));
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getAssets()) {
            $data['assets'] = $object->getAssets();
        }
        if (null !== $object->getDuration()) {
            $data['duration'] = $object->getDuration();
        }
        if (null !== $object->getEndTime()) {
            $data['endTime'] = $object->getEndTime();
        }
        if (null !== $object->getEngineId()) {
            $data['engineId'] = $object->getEngineId();
        }
        if (null !== $object->getEngineName()) {
            $data['engineName'] = $object->getEngineName();
        }
        if (null !== $object->getId()) {
            $data['id'] = $object->getId();
        }
        if (null !== $object->getMessage()) {
            $data['message'] = $object->getMessage();
        }
        if (null !== $object->getScanName()) {
            $data['scanName'] = $object->getScanName();
        }
        if (null !== $object->getScanType()) {
            $data['scanType'] = $object->getScanType();
        }
        if (null !== $object->getStartTime()) {
            $data['startTime'] = $object->getStartTime();
        }
        if (null !== $object->getStartedBy()) {
            $data['startedBy'] = $object->getStartedBy();
        }
        if (null !== $object->getStatus()) {
            $data['status'] = $object->getStatus();
        }
        if (null !== $object->getVulnerabilities()) {
            $data['vulnerabilities'] = $this->normalizer->normalize($object->getVulnerabilities(), 'json', $context);
        }
        return $data;
    }
}