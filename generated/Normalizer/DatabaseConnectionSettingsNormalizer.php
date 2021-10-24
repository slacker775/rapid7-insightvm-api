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
class DatabaseConnectionSettingsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Rapid7\\InsightVM\\Api\\Model\\DatabaseConnectionSettings';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Rapid7\\InsightVM\\Api\\Model\\DatabaseConnectionSettings';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Rapid7\InsightVM\Api\Model\DatabaseConnectionSettings();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('maximumAdministrationPoolSize', $data)) {
            $object->setMaximumAdministrationPoolSize($data['maximumAdministrationPoolSize']);
        }
        if (\array_key_exists('maximumPoolSize', $data)) {
            $object->setMaximumPoolSize($data['maximumPoolSize']);
        }
        if (\array_key_exists('maximumPreparedStatementPoolSize', $data)) {
            $object->setMaximumPreparedStatementPoolSize($data['maximumPreparedStatementPoolSize']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getMaximumAdministrationPoolSize()) {
            $data['maximumAdministrationPoolSize'] = $object->getMaximumAdministrationPoolSize();
        }
        if (null !== $object->getMaximumPoolSize()) {
            $data['maximumPoolSize'] = $object->getMaximumPoolSize();
        }
        if (null !== $object->getMaximumPreparedStatementPoolSize()) {
            $data['maximumPreparedStatementPoolSize'] = $object->getMaximumPreparedStatementPoolSize();
        }
        return $data;
    }
}