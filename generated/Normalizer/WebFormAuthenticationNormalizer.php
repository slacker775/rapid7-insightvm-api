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
class WebFormAuthenticationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Rapid7\\InsightVM\\Api\\Model\\WebFormAuthentication';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Rapid7\\InsightVM\\Api\\Model\\WebFormAuthentication';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Rapid7\InsightVM\Api\Model\WebFormAuthentication();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('baseURL', $data)) {
            $object->setBaseURL($data['baseURL']);
        }
        if (\array_key_exists('enabled', $data)) {
            $object->setEnabled($data['enabled']);
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
        if (\array_key_exists('loginRegularExpression', $data)) {
            $object->setLoginRegularExpression($data['loginRegularExpression']);
        }
        if (\array_key_exists('loginURL', $data)) {
            $object->setLoginURL($data['loginURL']);
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
        }
        if (\array_key_exists('service', $data)) {
            $object->setService($data['service']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getBaseURL()) {
            $data['baseURL'] = $object->getBaseURL();
        }
        if (null !== $object->getEnabled()) {
            $data['enabled'] = $object->getEnabled();
        }
        if (null !== $object->getId()) {
            $data['id'] = $object->getId();
        }
        if (null !== $object->getLoginRegularExpression()) {
            $data['loginRegularExpression'] = $object->getLoginRegularExpression();
        }
        if (null !== $object->getLoginURL()) {
            $data['loginURL'] = $object->getLoginURL();
        }
        if (null !== $object->getName()) {
            $data['name'] = $object->getName();
        }
        if (null !== $object->getService()) {
            $data['service'] = $object->getService();
        }
        return $data;
    }
}