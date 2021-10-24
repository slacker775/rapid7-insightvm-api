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
class DiskInfoNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Rapid7\\InsightVM\\Api\\Model\\DiskInfo';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Rapid7\\InsightVM\\Api\\Model\\DiskInfo';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Rapid7\InsightVM\Api\Model\DiskInfo();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('free', $data)) {
            $object->setFree($this->denormalizer->denormalize($data['free'], 'Rapid7\\InsightVM\\Api\\Model\\DiskFree', 'json', $context));
        }
        if (\array_key_exists('installation', $data)) {
            $object->setInstallation($this->denormalizer->denormalize($data['installation'], 'Rapid7\\InsightVM\\Api\\Model\\InstallSize', 'json', $context));
        }
        if (\array_key_exists('total', $data)) {
            $object->setTotal($this->denormalizer->denormalize($data['total'], 'Rapid7\\InsightVM\\Api\\Model\\DiskTotal', 'json', $context));
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getFree()) {
            $data['free'] = $this->normalizer->normalize($object->getFree(), 'json', $context);
        }
        if (null !== $object->getInstallation()) {
            $data['installation'] = $this->normalizer->normalize($object->getInstallation(), 'json', $context);
        }
        if (null !== $object->getTotal()) {
            $data['total'] = $this->normalizer->normalize($object->getTotal(), 'json', $context);
        }
        return $data;
    }
}