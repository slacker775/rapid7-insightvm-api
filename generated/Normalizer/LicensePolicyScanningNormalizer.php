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
class LicensePolicyScanningNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Rapid7\\InsightVM\\Api\\Model\\LicensePolicyScanning';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Rapid7\\InsightVM\\Api\\Model\\LicensePolicyScanning';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Rapid7\InsightVM\Api\Model\LicensePolicyScanning();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('benchmarks', $data)) {
            $object->setBenchmarks($this->denormalizer->denormalize($data['benchmarks'], 'Rapid7\\InsightVM\\Api\\Model\\LicensePolicyScanningBenchmarks', 'json', $context));
        }
        if (\array_key_exists('scanning', $data)) {
            $object->setScanning($data['scanning']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getBenchmarks()) {
            $data['benchmarks'] = $this->normalizer->normalize($object->getBenchmarks(), 'json', $context);
        }
        if (null !== $object->getScanning()) {
            $data['scanning'] = $object->getScanning();
        }
        return $data;
    }
}