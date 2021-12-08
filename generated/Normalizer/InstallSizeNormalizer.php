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
class InstallSizeNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Rapid7\\InsightVM\\Api\\Model\\InstallSize';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Rapid7\\InsightVM\\Api\\Model\\InstallSize';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Rapid7\InsightVM\Api\Model\InstallSize();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('backups', $data)) {
            $object->setBackups($this->denormalizer->denormalize($data['backups'], 'Rapid7\\InsightVM\\Api\\Model\\BackupsSize', 'json', $context));
        }
        if (\array_key_exists('database', $data)) {
            $object->setDatabase($this->denormalizer->denormalize($data['database'], 'Rapid7\\InsightVM\\Api\\Model\\DatabaseSize', 'json', $context));
        }
        if (\array_key_exists('directory', $data)) {
            $object->setDirectory($this->denormalizer->denormalize($data['directory'], 'Rapid7\\InsightVM\\Api\\Model\\File', 'json', $context));
        }
        if (\array_key_exists('reports', $data)) {
            $object->setReports($this->denormalizer->denormalize($data['reports'], 'Rapid7\\InsightVM\\Api\\Model\\ReportSize', 'json', $context));
        }
        if (\array_key_exists('scans', $data)) {
            $object->setScans($this->denormalizer->denormalize($data['scans'], 'Rapid7\\InsightVM\\Api\\Model\\ScanSize', 'json', $context));
        }
        if (\array_key_exists('total', $data)) {
            $object->setTotal($this->denormalizer->denormalize($data['total'], 'Rapid7\\InsightVM\\Api\\Model\\InstallationTotalSize', 'json', $context));
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getBackups()) {
            $data['backups'] = $this->normalizer->normalize($object->getBackups(), 'json', $context);
        }
        if (null !== $object->getDatabase()) {
            $data['database'] = $this->normalizer->normalize($object->getDatabase(), 'json', $context);
        }
        if (null !== $object->getDirectory()) {
            $data['directory'] = $this->normalizer->normalize($object->getDirectory(), 'json', $context);
        }
        if (null !== $object->getReports()) {
            $data['reports'] = $this->normalizer->normalize($object->getReports(), 'json', $context);
        }
        if (null !== $object->getScans()) {
            $data['scans'] = $this->normalizer->normalize($object->getScans(), 'json', $context);
        }
        if (null !== $object->getTotal()) {
            $data['total'] = $this->normalizer->normalize($object->getTotal(), 'json', $context);
        }
        return $data;
    }
}