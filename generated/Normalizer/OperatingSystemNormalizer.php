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
class OperatingSystemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Rapid7\\InsightVM\\Api\\Model\\OperatingSystem';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Rapid7\\InsightVM\\Api\\Model\\OperatingSystem';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Rapid7\InsightVM\Api\Model\OperatingSystem();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('architecture', $data)) {
            $object->setArchitecture($data['architecture']);
        }
        if (\array_key_exists('configurations', $data)) {
            $values = array();
            foreach ($data['configurations'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Rapid7\\InsightVM\\Api\\Model\\Configuration', 'json', $context);
            }
            $object->setConfigurations($values);
        }
        if (\array_key_exists('cpe', $data)) {
            $object->setCpe($this->denormalizer->denormalize($data['cpe'], 'Rapid7\\InsightVM\\Api\\Model\\OperatingSystemCpe', 'json', $context));
        }
        if (\array_key_exists('description', $data)) {
            $object->setDescription($data['description']);
        }
        if (\array_key_exists('family', $data)) {
            $object->setFamily($data['family']);
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (\array_key_exists('product', $data)) {
            $object->setProduct($data['product']);
        }
        if (\array_key_exists('systemName', $data)) {
            $object->setSystemName($data['systemName']);
        }
        if (\array_key_exists('type', $data)) {
            $object->setType($data['type']);
        }
        if (\array_key_exists('vendor', $data)) {
            $object->setVendor($data['vendor']);
        }
        if (\array_key_exists('version', $data)) {
            $object->setVersion($data['version']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getArchitecture()) {
            $data['architecture'] = $object->getArchitecture();
        }
        if (null !== $object->getConfigurations()) {
            $values = array();
            foreach ($object->getConfigurations() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['configurations'] = $values;
        }
        if (null !== $object->getCpe()) {
            $data['cpe'] = $this->normalizer->normalize($object->getCpe(), 'json', $context);
        }
        if (null !== $object->getDescription()) {
            $data['description'] = $object->getDescription();
        }
        if (null !== $object->getFamily()) {
            $data['family'] = $object->getFamily();
        }
        if (null !== $object->getId()) {
            $data['id'] = $object->getId();
        }
        if (null !== $object->getProduct()) {
            $data['product'] = $object->getProduct();
        }
        if (null !== $object->getSystemName()) {
            $data['systemName'] = $object->getSystemName();
        }
        if (null !== $object->getType()) {
            $data['type'] = $object->getType();
        }
        if (null !== $object->getVendor()) {
            $data['vendor'] = $object->getVendor();
        }
        if (null !== $object->getVersion()) {
            $data['version'] = $object->getVersion();
        }
        return $data;
    }
}