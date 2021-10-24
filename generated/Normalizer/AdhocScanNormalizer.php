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
class AdhocScanNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Rapid7\\InsightVM\\Api\\Model\\AdhocScan';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Rapid7\\InsightVM\\Api\\Model\\AdhocScan';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Rapid7\InsightVM\Api\Model\AdhocScan();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('engineId', $data)) {
            $object->setEngineId($data['engineId']);
        }
        if (\array_key_exists('hosts', $data)) {
            $values = array();
            foreach ($data['hosts'] as $value) {
                $values[] = $value;
            }
            $object->setHosts($values);
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
        }
        if (\array_key_exists('templateId', $data)) {
            $object->setTemplateId($data['templateId']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getEngineId()) {
            $data['engineId'] = $object->getEngineId();
        }
        if (null !== $object->getHosts()) {
            $values = array();
            foreach ($object->getHosts() as $value) {
                $values[] = $value;
            }
            $data['hosts'] = $values;
        }
        if (null !== $object->getName()) {
            $data['name'] = $object->getName();
        }
        if (null !== $object->getTemplateId()) {
            $data['templateId'] = $object->getTemplateId();
        }
        return $data;
    }
}