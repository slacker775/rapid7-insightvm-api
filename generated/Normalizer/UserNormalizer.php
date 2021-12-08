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
class UserNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Rapid7\\InsightVM\\Api\\Model\\User';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Rapid7\\InsightVM\\Api\\Model\\User';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Rapid7\InsightVM\Api\Model\User();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('authentication', $data)) {
            $object->setAuthentication($this->denormalizer->denormalize($data['authentication'], 'Rapid7\\InsightVM\\Api\\Model\\CreateAuthenticationSource', 'json', $context));
        }
        if (\array_key_exists('email', $data)) {
            $object->setEmail($data['email']);
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
        if (\array_key_exists('locale', $data)) {
            $object->setLocale($this->denormalizer->denormalize($data['locale'], 'Rapid7\\InsightVM\\Api\\Model\\LocalePreferences', 'json', $context));
        }
        if (\array_key_exists('locked', $data)) {
            $object->setLocked($data['locked']);
        }
        if (\array_key_exists('login', $data)) {
            $object->setLogin($data['login']);
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
        }
        if (\array_key_exists('password', $data)) {
            $object->setPassword($data['password']);
        }
        if (\array_key_exists('passwordResetOnLogin', $data)) {
            $object->setPasswordResetOnLogin($data['passwordResetOnLogin']);
        }
        if (\array_key_exists('role', $data)) {
            $object->setRole($this->denormalizer->denormalize($data['role'], 'Rapid7\\InsightVM\\Api\\Model\\UserCreateRole', 'json', $context));
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getAuthentication()) {
            $data['authentication'] = $this->normalizer->normalize($object->getAuthentication(), 'json', $context);
        }
        if (null !== $object->getEmail()) {
            $data['email'] = $object->getEmail();
        }
        if (null !== $object->getEnabled()) {
            $data['enabled'] = $object->getEnabled();
        }
        if (null !== $object->getLocale()) {
            $data['locale'] = $this->normalizer->normalize($object->getLocale(), 'json', $context);
        }
        $data['login'] = $object->getLogin();
        $data['name'] = $object->getName();
        $data['password'] = $object->getPassword();
        if (null !== $object->getPasswordResetOnLogin()) {
            $data['passwordResetOnLogin'] = $object->getPasswordResetOnLogin();
        }
        $data['role'] = $this->normalizer->normalize($object->getRole(), 'json', $context);
        return $data;
    }
}