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
class LicenseScanningNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Rapid7\\InsightVM\\Api\\Model\\LicenseScanning';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Rapid7\\InsightVM\\Api\\Model\\LicenseScanning';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Rapid7\InsightVM\Api\Model\LicenseScanning();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('discovery', $data)) {
            $object->setDiscovery($data['discovery']);
        }
        if (\array_key_exists('policy', $data)) {
            $object->setPolicy($this->denormalizer->denormalize($data['policy'], 'Rapid7\\InsightVM\\Api\\Model\\LicensePolicyScanning', 'json', $context));
        }
        if (\array_key_exists('scada', $data)) {
            $object->setScada($data['scada']);
        }
        if (\array_key_exists('virtual', $data)) {
            $object->setVirtual($data['virtual']);
        }
        if (\array_key_exists('webApplication', $data)) {
            $object->setWebApplication($data['webApplication']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getDiscovery()) {
            $data['discovery'] = $object->getDiscovery();
        }
        if (null !== $object->getPolicy()) {
            $data['policy'] = $this->normalizer->normalize($object->getPolicy(), 'json', $context);
        }
        if (null !== $object->getScada()) {
            $data['scada'] = $object->getScada();
        }
        if (null !== $object->getVirtual()) {
            $data['virtual'] = $object->getVirtual();
        }
        if (null !== $object->getWebApplication()) {
            $data['webApplication'] = $object->getWebApplication();
        }
        return $data;
    }
}