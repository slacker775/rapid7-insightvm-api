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
class DatabaseSettingsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Rapid7\\InsightVM\\Api\\Model\\DatabaseSettings';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Rapid7\\InsightVM\\Api\\Model\\DatabaseSettings';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Rapid7\InsightVM\Api\Model\DatabaseSettings();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('connection', $data)) {
            $object->setConnection($this->denormalizer->denormalize($data['connection'], 'Rapid7\\InsightVM\\Api\\Model\\DatabaseConnectionSettings', 'json', $context));
        }
        if (\array_key_exists('host', $data)) {
            $object->setHost($data['host']);
        }
        if (\array_key_exists('maintenanceThreadPoolSize', $data)) {
            $object->setMaintenanceThreadPoolSize($data['maintenanceThreadPoolSize']);
        }
        if (\array_key_exists('port', $data)) {
            $object->setPort($data['port']);
        }
        if (\array_key_exists('url', $data)) {
            $object->setUrl($data['url']);
        }
        if (\array_key_exists('user', $data)) {
            $object->setUser($data['user']);
        }
        if (\array_key_exists('vendor', $data)) {
            $object->setVendor($data['vendor']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getConnection()) {
            $data['connection'] = $this->normalizer->normalize($object->getConnection(), 'json', $context);
        }
        if (null !== $object->getHost()) {
            $data['host'] = $object->getHost();
        }
        if (null !== $object->getMaintenanceThreadPoolSize()) {
            $data['maintenanceThreadPoolSize'] = $object->getMaintenanceThreadPoolSize();
        }
        if (null !== $object->getPort()) {
            $data['port'] = $object->getPort();
        }
        if (null !== $object->getUrl()) {
            $data['url'] = $object->getUrl();
        }
        if (null !== $object->getUser()) {
            $data['user'] = $object->getUser();
        }
        if (null !== $object->getVendor()) {
            $data['vendor'] = $object->getVendor();
        }
        return $data;
    }
}