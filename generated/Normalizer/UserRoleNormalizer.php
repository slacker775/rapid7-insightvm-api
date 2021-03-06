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
class UserRoleNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Rapid7\\InsightVM\\Api\\Model\\UserRole';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Rapid7\\InsightVM\\Api\\Model\\UserRole';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Rapid7\InsightVM\Api\Model\UserRole();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('allAssetGroups', $data)) {
            $object->setAllAssetGroups($data['allAssetGroups']);
        }
        if (\array_key_exists('allSites', $data)) {
            $object->setAllSites($data['allSites']);
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
        }
        if (\array_key_exists('privileges', $data)) {
            $values = array();
            foreach ($data['privileges'] as $value) {
                $values[] = $value;
            }
            $object->setPrivileges($values);
        }
        if (\array_key_exists('superuser', $data)) {
            $object->setSuperuser($data['superuser']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getAllAssetGroups()) {
            $data['allAssetGroups'] = $object->getAllAssetGroups();
        }
        if (null !== $object->getAllSites()) {
            $data['allSites'] = $object->getAllSites();
        }
        if (null !== $object->getId()) {
            $data['id'] = $object->getId();
        }
        if (null !== $object->getName()) {
            $data['name'] = $object->getName();
        }
        if (null !== $object->getPrivileges()) {
            $values = array();
            foreach ($object->getPrivileges() as $value) {
                $values[] = $value;
            }
            $data['privileges'] = $values;
        }
        if (null !== $object->getSuperuser()) {
            $data['superuser'] = $object->getSuperuser();
        }
        return $data;
    }
}