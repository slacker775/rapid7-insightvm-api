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
class LicensePolicyScanningBenchmarksNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Rapid7\\InsightVM\\Api\\Model\\LicensePolicyScanningBenchmarks';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Rapid7\\InsightVM\\Api\\Model\\LicensePolicyScanningBenchmarks';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Rapid7\InsightVM\Api\Model\LicensePolicyScanningBenchmarks();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('cis', $data)) {
            $object->setCis($data['cis']);
        }
        if (\array_key_exists('custom', $data)) {
            $object->setCustom($data['custom']);
        }
        if (\array_key_exists('disa', $data)) {
            $object->setDisa($data['disa']);
        }
        if (\array_key_exists('fdcc', $data)) {
            $object->setFdcc($data['fdcc']);
        }
        if (\array_key_exists('usgcb', $data)) {
            $object->setUsgcb($data['usgcb']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getCis()) {
            $data['cis'] = $object->getCis();
        }
        if (null !== $object->getCustom()) {
            $data['custom'] = $object->getCustom();
        }
        if (null !== $object->getDisa()) {
            $data['disa'] = $object->getDisa();
        }
        if (null !== $object->getFdcc()) {
            $data['fdcc'] = $object->getFdcc();
        }
        if (null !== $object->getUsgcb()) {
            $data['usgcb'] = $object->getUsgcb();
        }
        return $data;
    }
}