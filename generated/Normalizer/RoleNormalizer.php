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
class RoleNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Rapid7\\InsightVM\\Api\\Model\\Role';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Rapid7\\InsightVM\\Api\\Model\\Role';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Rapid7\InsightVM\Api\Model\Role();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('description', $data)) {
            $object->setDescription($data['description']);
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (\array_key_exists('links', $data)) {
            $values = array();
            foreach ($data['links'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Rapid7\\InsightVM\\Api\\Model\\Link', 'json', $context);
            }
            $object->setLinks($values);
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
        }
        if (\array_key_exists('privileges', $data)) {
            $values_1 = array();
            foreach ($data['privileges'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setPrivileges($values_1);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['description'] = $object->getDescription();
        $data['id'] = $object->getId();
        $data['name'] = $object->getName();
        if (null !== $object->getPrivileges()) {
            $values = array();
            foreach ($object->getPrivileges() as $value) {
                $values[] = $value;
            }
            $data['privileges'] = $values;
        }
        return $data;
    }
}