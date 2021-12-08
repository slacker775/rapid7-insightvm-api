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
class AssessmentResultNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Rapid7\\InsightVM\\Api\\Model\\AssessmentResult';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Rapid7\\InsightVM\\Api\\Model\\AssessmentResult';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Rapid7\InsightVM\Api\Model\AssessmentResult();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('checkId', $data)) {
            $object->setCheckId($data['checkId']);
        }
        if (\array_key_exists('exceptions', $data)) {
            $values = array();
            foreach ($data['exceptions'] as $value) {
                $values[] = $value;
            }
            $object->setExceptions($values);
        }
        if (\array_key_exists('key', $data)) {
            $object->setKey($data['key']);
        }
        if (\array_key_exists('links', $data)) {
            $values_1 = array();
            foreach ($data['links'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Rapid7\\InsightVM\\Api\\Model\\Link', 'json', $context);
            }
            $object->setLinks($values_1);
        }
        if (\array_key_exists('port', $data)) {
            $object->setPort($data['port']);
        }
        if (\array_key_exists('proof', $data)) {
            $object->setProof($data['proof']);
        }
        if (\array_key_exists('protocol', $data)) {
            $object->setProtocol($data['protocol']);
        }
        if (\array_key_exists('status', $data)) {
            $object->setStatus($data['status']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getCheckId()) {
            $data['checkId'] = $object->getCheckId();
        }
        if (null !== $object->getExceptions()) {
            $values = array();
            foreach ($object->getExceptions() as $value) {
                $values[] = $value;
            }
            $data['exceptions'] = $values;
        }
        if (null !== $object->getKey()) {
            $data['key'] = $object->getKey();
        }
        if (null !== $object->getPort()) {
            $data['port'] = $object->getPort();
        }
        if (null !== $object->getProof()) {
            $data['proof'] = $object->getProof();
        }
        if (null !== $object->getProtocol()) {
            $data['protocol'] = $object->getProtocol();
        }
        $data['status'] = $object->getStatus();
        return $data;
    }
}