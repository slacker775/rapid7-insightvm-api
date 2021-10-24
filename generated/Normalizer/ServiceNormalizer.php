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
class ServiceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Rapid7\\InsightVM\\Api\\Model\\Service';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Rapid7\\InsightVM\\Api\\Model\\Service';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Rapid7\InsightVM\Api\Model\Service();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('configurations', $data)) {
            $values = array();
            foreach ($data['configurations'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Rapid7\\InsightVM\\Api\\Model\\Configuration', 'json', $context);
            }
            $object->setConfigurations($values);
        }
        if (\array_key_exists('databases', $data)) {
            $values_1 = array();
            foreach ($data['databases'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Rapid7\\InsightVM\\Api\\Model\\Database', 'json', $context);
            }
            $object->setDatabases($values_1);
        }
        if (\array_key_exists('family', $data)) {
            $object->setFamily($data['family']);
        }
        if (\array_key_exists('links', $data)) {
            $values_2 = array();
            foreach ($data['links'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, 'Rapid7\\InsightVM\\Api\\Model\\Link', 'json', $context);
            }
            $object->setLinks($values_2);
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
        }
        if (\array_key_exists('port', $data)) {
            $object->setPort($data['port']);
        }
        if (\array_key_exists('product', $data)) {
            $object->setProduct($data['product']);
        }
        if (\array_key_exists('protocol', $data)) {
            $object->setProtocol($data['protocol']);
        }
        if (\array_key_exists('userGroups', $data)) {
            $values_3 = array();
            foreach ($data['userGroups'] as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, 'Rapid7\\InsightVM\\Api\\Model\\GroupAccount', 'json', $context);
            }
            $object->setUserGroups($values_3);
        }
        if (\array_key_exists('users', $data)) {
            $values_4 = array();
            foreach ($data['users'] as $value_4) {
                $values_4[] = $this->denormalizer->denormalize($value_4, 'Rapid7\\InsightVM\\Api\\Model\\UserAccount', 'json', $context);
            }
            $object->setUsers($values_4);
        }
        if (\array_key_exists('vendor', $data)) {
            $object->setVendor($data['vendor']);
        }
        if (\array_key_exists('version', $data)) {
            $object->setVersion($data['version']);
        }
        if (\array_key_exists('webApplications', $data)) {
            $values_5 = array();
            foreach ($data['webApplications'] as $value_5) {
                $values_5[] = $this->denormalizer->denormalize($value_5, 'Rapid7\\InsightVM\\Api\\Model\\WebApplication', 'json', $context);
            }
            $object->setWebApplications($values_5);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getConfigurations()) {
            $values = array();
            foreach ($object->getConfigurations() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['configurations'] = $values;
        }
        if (null !== $object->getDatabases()) {
            $values_1 = array();
            foreach ($object->getDatabases() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['databases'] = $values_1;
        }
        if (null !== $object->getFamily()) {
            $data['family'] = $object->getFamily();
        }
        if (null !== $object->getName()) {
            $data['name'] = $object->getName();
        }
        $data['port'] = $object->getPort();
        if (null !== $object->getProduct()) {
            $data['product'] = $object->getProduct();
        }
        $data['protocol'] = $object->getProtocol();
        if (null !== $object->getUserGroups()) {
            $values_2 = array();
            foreach ($object->getUserGroups() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $data['userGroups'] = $values_2;
        }
        if (null !== $object->getUsers()) {
            $values_3 = array();
            foreach ($object->getUsers() as $value_3) {
                $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
            }
            $data['users'] = $values_3;
        }
        if (null !== $object->getVendor()) {
            $data['vendor'] = $object->getVendor();
        }
        if (null !== $object->getVersion()) {
            $data['version'] = $object->getVersion();
        }
        if (null !== $object->getWebApplications()) {
            $values_4 = array();
            foreach ($object->getWebApplications() as $value_4) {
                $values_4[] = $this->normalizer->normalize($value_4, 'json', $context);
            }
            $data['webApplications'] = $values_4;
        }
        return $data;
    }
}