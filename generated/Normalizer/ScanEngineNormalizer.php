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
class ScanEngineNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Rapid7\\InsightVM\\Api\\Model\\ScanEngine';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Rapid7\\InsightVM\\Api\\Model\\ScanEngine';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Rapid7\InsightVM\Api\Model\ScanEngine();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('address', $data)) {
            $object->setAddress($data['address']);
        }
        if (\array_key_exists('contentVersion', $data)) {
            $object->setContentVersion($data['contentVersion']);
        }
        if (\array_key_exists('enginePools', $data)) {
            $values = array();
            foreach ($data['enginePools'] as $value) {
                $values[] = $value;
            }
            $object->setEnginePools($values);
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (\array_key_exists('lastRefreshedDate', $data)) {
            $object->setLastRefreshedDate($data['lastRefreshedDate']);
        }
        if (\array_key_exists('lastUpdatedDate', $data)) {
            $object->setLastUpdatedDate($data['lastUpdatedDate']);
        }
        if (\array_key_exists('links', $data)) {
            $values_1 = array();
            foreach ($data['links'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Rapid7\\InsightVM\\Api\\Model\\Link', 'json', $context);
            }
            $object->setLinks($values_1);
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
        }
        if (\array_key_exists('port', $data)) {
            $object->setPort($data['port']);
        }
        if (\array_key_exists('productVersion', $data)) {
            $object->setProductVersion($data['productVersion']);
        }
        if (\array_key_exists('sites', $data)) {
            $values_2 = array();
            foreach ($data['sites'] as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setSites($values_2);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['address'] = $object->getAddress();
        $data['id'] = $object->getId();
        $data['name'] = $object->getName();
        $data['port'] = $object->getPort();
        if (null !== $object->getSites()) {
            $values = array();
            foreach ($object->getSites() as $value) {
                $values[] = $value;
            }
            $data['sites'] = $values;
        }
        return $data;
    }
}