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
class LicenseLimitsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Rapid7\\InsightVM\\Api\\Model\\LicenseLimits';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Rapid7\\InsightVM\\Api\\Model\\LicenseLimits';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Rapid7\InsightVM\Api\Model\LicenseLimits();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('assets', $data)) {
            $object->setAssets($data['assets']);
        }
        if (\array_key_exists('assetsWithHostedEngine', $data)) {
            $object->setAssetsWithHostedEngine($data['assetsWithHostedEngine']);
        }
        if (\array_key_exists('scanEngines', $data)) {
            $object->setScanEngines($data['scanEngines']);
        }
        if (\array_key_exists('users', $data)) {
            $object->setUsers($data['users']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getAssets()) {
            $data['assets'] = $object->getAssets();
        }
        if (null !== $object->getAssetsWithHostedEngine()) {
            $data['assetsWithHostedEngine'] = $object->getAssetsWithHostedEngine();
        }
        if (null !== $object->getScanEngines()) {
            $data['scanEngines'] = $object->getScanEngines();
        }
        if (null !== $object->getUsers()) {
            $data['users'] = $object->getUsers();
        }
        return $data;
    }
}