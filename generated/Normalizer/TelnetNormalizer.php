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
class TelnetNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Rapid7\\InsightVM\\Api\\Model\\Telnet';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Rapid7\\InsightVM\\Api\\Model\\Telnet';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Rapid7\InsightVM\Api\Model\Telnet();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('characterSet', $data)) {
            $object->setCharacterSet($data['characterSet']);
        }
        if (\array_key_exists('failedLoginRegex', $data)) {
            $object->setFailedLoginRegex($data['failedLoginRegex']);
        }
        if (\array_key_exists('links', $data)) {
            $values = array();
            foreach ($data['links'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Rapid7\\InsightVM\\Api\\Model\\Link', 'json', $context);
            }
            $object->setLinks($values);
        }
        if (\array_key_exists('loginRegex', $data)) {
            $object->setLoginRegex($data['loginRegex']);
        }
        if (\array_key_exists('passwordPromptRegex', $data)) {
            $object->setPasswordPromptRegex($data['passwordPromptRegex']);
        }
        if (\array_key_exists('questionableLoginRegex', $data)) {
            $object->setQuestionableLoginRegex($data['questionableLoginRegex']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getCharacterSet()) {
            $data['characterSet'] = $object->getCharacterSet();
        }
        if (null !== $object->getFailedLoginRegex()) {
            $data['failedLoginRegex'] = $object->getFailedLoginRegex();
        }
        if (null !== $object->getLoginRegex()) {
            $data['loginRegex'] = $object->getLoginRegex();
        }
        if (null !== $object->getPasswordPromptRegex()) {
            $data['passwordPromptRegex'] = $object->getPasswordPromptRegex();
        }
        if (null !== $object->getQuestionableLoginRegex()) {
            $data['questionableLoginRegex'] = $object->getQuestionableLoginRegex();
        }
        return $data;
    }
}