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
class ScanTemplateServiceDiscoveryTcpNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Rapid7\\InsightVM\\Api\\Model\\ScanTemplateServiceDiscoveryTcp';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Rapid7\\InsightVM\\Api\\Model\\ScanTemplateServiceDiscoveryTcp';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Rapid7\InsightVM\Api\Model\ScanTemplateServiceDiscoveryTcp();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('additionalPorts', $data)) {
            $values = array();
            foreach ($data['additionalPorts'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Rapid7\\InsightVM\\Api\\Model\\ScanTemplateServiceDiscoveryTcpAdditionalPortsItem', 'json', $context);
            }
            $object->setAdditionalPorts($values);
        }
        if (\array_key_exists('excludedPorts', $data)) {
            $values_1 = array();
            foreach ($data['excludedPorts'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Rapid7\\InsightVM\\Api\\Model\\ScanTemplateServiceDiscoveryTcpExcludedPortsItem', 'json', $context);
            }
            $object->setExcludedPorts($values_1);
        }
        if (\array_key_exists('links', $data)) {
            $values_2 = array();
            foreach ($data['links'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, 'Rapid7\\InsightVM\\Api\\Model\\Link', 'json', $context);
            }
            $object->setLinks($values_2);
        }
        if (\array_key_exists('method', $data)) {
            $object->setMethod($data['method']);
        }
        if (\array_key_exists('ports', $data)) {
            $object->setPorts($data['ports']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getAdditionalPorts()) {
            $values = array();
            foreach ($object->getAdditionalPorts() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['additionalPorts'] = $values;
        }
        if (null !== $object->getExcludedPorts()) {
            $values_1 = array();
            foreach ($object->getExcludedPorts() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['excludedPorts'] = $values_1;
        }
        if (null !== $object->getMethod()) {
            $data['method'] = $object->getMethod();
        }
        if (null !== $object->getPorts()) {
            $data['ports'] = $object->getPorts();
        }
        return $data;
    }
}