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
class SharedCredentialAccountNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Rapid7\\InsightVM\\Api\\Model\\SharedCredentialAccount';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Rapid7\\InsightVM\\Api\\Model\\SharedCredentialAccount';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Rapid7\InsightVM\Api\Model\SharedCredentialAccount();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('authenticationType', $data)) {
            $object->setAuthenticationType($data['authenticationType']);
        }
        if (\array_key_exists('communityName', $data)) {
            $object->setCommunityName($data['communityName']);
        }
        if (\array_key_exists('database', $data)) {
            $object->setDatabase($data['database']);
        }
        if (\array_key_exists('domain', $data)) {
            $object->setDomain($data['domain']);
        }
        if (\array_key_exists('enumerateSids', $data)) {
            $object->setEnumerateSids($data['enumerateSids']);
        }
        if (\array_key_exists('notesIDPassword', $data)) {
            $object->setNotesIDPassword($data['notesIDPassword']);
        }
        if (\array_key_exists('ntlmHash', $data)) {
            $object->setNtlmHash($data['ntlmHash']);
        }
        if (\array_key_exists('oracleListenerPassword', $data)) {
            $object->setOracleListenerPassword($data['oracleListenerPassword']);
        }
        if (\array_key_exists('password', $data)) {
            $object->setPassword($data['password']);
        }
        if (\array_key_exists('pemKey', $data)) {
            $object->setPemKey($data['pemKey']);
        }
        if (\array_key_exists('permissionElevation', $data)) {
            $object->setPermissionElevation($data['permissionElevation']);
        }
        if (\array_key_exists('permissionElevationPassword', $data)) {
            $object->setPermissionElevationPassword($data['permissionElevationPassword']);
        }
        if (\array_key_exists('permissionElevationUserName', $data)) {
            $object->setPermissionElevationUserName($data['permissionElevationUserName']);
        }
        if (\array_key_exists('privacyPassword', $data)) {
            $object->setPrivacyPassword($data['privacyPassword']);
        }
        if (\array_key_exists('privacyType', $data)) {
            $object->setPrivacyType($data['privacyType']);
        }
        if (\array_key_exists('privateKeyPassword', $data)) {
            $object->setPrivateKeyPassword($data['privateKeyPassword']);
        }
        if (\array_key_exists('realm', $data)) {
            $object->setRealm($data['realm']);
        }
        if (\array_key_exists('service', $data)) {
            $object->setService($data['service']);
        }
        if (\array_key_exists('sid', $data)) {
            $object->setSid($data['sid']);
        }
        if (\array_key_exists('useWindowsAuthentication', $data)) {
            $object->setUseWindowsAuthentication($data['useWindowsAuthentication']);
        }
        if (\array_key_exists('username', $data)) {
            $object->setUsername($data['username']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getAuthenticationType()) {
            $data['authenticationType'] = $object->getAuthenticationType();
        }
        if (null !== $object->getCommunityName()) {
            $data['communityName'] = $object->getCommunityName();
        }
        if (null !== $object->getDatabase()) {
            $data['database'] = $object->getDatabase();
        }
        if (null !== $object->getDomain()) {
            $data['domain'] = $object->getDomain();
        }
        if (null !== $object->getEnumerateSids()) {
            $data['enumerateSids'] = $object->getEnumerateSids();
        }
        if (null !== $object->getNotesIDPassword()) {
            $data['notesIDPassword'] = $object->getNotesIDPassword();
        }
        if (null !== $object->getNtlmHash()) {
            $data['ntlmHash'] = $object->getNtlmHash();
        }
        if (null !== $object->getOracleListenerPassword()) {
            $data['oracleListenerPassword'] = $object->getOracleListenerPassword();
        }
        if (null !== $object->getPassword()) {
            $data['password'] = $object->getPassword();
        }
        if (null !== $object->getPemKey()) {
            $data['pemKey'] = $object->getPemKey();
        }
        if (null !== $object->getPermissionElevation()) {
            $data['permissionElevation'] = $object->getPermissionElevation();
        }
        if (null !== $object->getPermissionElevationPassword()) {
            $data['permissionElevationPassword'] = $object->getPermissionElevationPassword();
        }
        if (null !== $object->getPermissionElevationUserName()) {
            $data['permissionElevationUserName'] = $object->getPermissionElevationUserName();
        }
        if (null !== $object->getPrivacyPassword()) {
            $data['privacyPassword'] = $object->getPrivacyPassword();
        }
        if (null !== $object->getPrivacyType()) {
            $data['privacyType'] = $object->getPrivacyType();
        }
        if (null !== $object->getPrivateKeyPassword()) {
            $data['privateKeyPassword'] = $object->getPrivateKeyPassword();
        }
        if (null !== $object->getRealm()) {
            $data['realm'] = $object->getRealm();
        }
        if (null !== $object->getService()) {
            $data['service'] = $object->getService();
        }
        if (null !== $object->getSid()) {
            $data['sid'] = $object->getSid();
        }
        if (null !== $object->getUseWindowsAuthentication()) {
            $data['useWindowsAuthentication'] = $object->getUseWindowsAuthentication();
        }
        if (null !== $object->getUsername()) {
            $data['username'] = $object->getUsername();
        }
        return $data;
    }
}