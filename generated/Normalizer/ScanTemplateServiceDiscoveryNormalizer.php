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
class ScanTemplateServiceDiscoveryNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Rapid7\\InsightVM\\Api\\Model\\ScanTemplateServiceDiscovery';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Rapid7\\InsightVM\\Api\\Model\\ScanTemplateServiceDiscovery';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Rapid7\InsightVM\Api\Model\ScanTemplateServiceDiscovery();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('serviceNameFile', $data)) {
            $object->setServiceNameFile($data['serviceNameFile']);
        }
        if (\array_key_exists('tcp', $data)) {
            $object->setTcp($this->denormalizer->denormalize($data['tcp'], 'Rapid7\\InsightVM\\Api\\Model\\ScanTemplateServiceDiscoveryTcp', 'json', $context));
        }
        if (\array_key_exists('udp', $data)) {
            $object->setUdp($this->denormalizer->denormalize($data['udp'], 'Rapid7\\InsightVM\\Api\\Model\\ScanTemplateServiceDiscoveryUdp', 'json', $context));
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getServiceNameFile()) {
            $data['serviceNameFile'] = $object->getServiceNameFile();
        }
        if (null !== $object->getTcp()) {
            $data['tcp'] = $this->normalizer->normalize($object->getTcp(), 'json', $context);
        }
        if (null !== $object->getUdp()) {
            $data['udp'] = $this->normalizer->normalize($object->getUdp(), 'json', $context);
        }
        return $data;
    }
}