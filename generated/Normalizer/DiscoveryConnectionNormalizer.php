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
class DiscoveryConnectionNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Rapid7\\InsightVM\\Api\\Model\\DiscoveryConnection';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Rapid7\\InsightVM\\Api\\Model\\DiscoveryConnection';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Rapid7\InsightVM\Api\Model\DiscoveryConnection();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('accessKeyId', $data)) {
            $object->setAccessKeyId($data['accessKeyId']);
        }
        if (\array_key_exists('address', $data)) {
            $object->setAddress($data['address']);
        }
        if (\array_key_exists('arn', $data)) {
            $object->setArn($data['arn']);
        }
        if (\array_key_exists('awsSessionName', $data)) {
            $object->setAwsSessionName($data['awsSessionName']);
        }
        if (\array_key_exists('connectionType', $data)) {
            $object->setConnectionType($data['connectionType']);
        }
        if (\array_key_exists('eventSource', $data)) {
            $object->setEventSource($data['eventSource']);
        }
        if (\array_key_exists('exchangeServerHostname', $data)) {
            $object->setExchangeServerHostname($data['exchangeServerHostname']);
        }
        if (\array_key_exists('exchangeUser', $data)) {
            $object->setExchangeUser($data['exchangeUser']);
        }
        if (\array_key_exists('folderPath', $data)) {
            $object->setFolderPath($data['folderPath']);
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (\array_key_exists('ldapServer', $data)) {
            $object->setLdapServer($data['ldapServer']);
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
        if (\array_key_exists('port', $data)) {
            $object->setPort($data['port']);
        }
        if (\array_key_exists('protocol', $data)) {
            $object->setProtocol($data['protocol']);
        }
        if (\array_key_exists('region', $data)) {
            $object->setRegion($data['region']);
        }
        if (\array_key_exists('scanEngineIsInsideAWS', $data)) {
            $object->setScanEngineIsInsideAWS($data['scanEngineIsInsideAWS']);
        }
        if (\array_key_exists('secretAccessKey', $data)) {
            $object->setSecretAccessKey($data['secretAccessKey']);
        }
        if (\array_key_exists('status', $data)) {
            $object->setStatus($data['status']);
        }
        if (\array_key_exists('username', $data)) {
            $object->setUsername($data['username']);
        }
        if (\array_key_exists('winRMServer', $data)) {
            $object->setWinRMServer($data['winRMServer']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getAccessKeyId()) {
            $data['accessKeyId'] = $object->getAccessKeyId();
        }
        if (null !== $object->getAddress()) {
            $data['address'] = $object->getAddress();
        }
        if (null !== $object->getArn()) {
            $data['arn'] = $object->getArn();
        }
        if (null !== $object->getAwsSessionName()) {
            $data['awsSessionName'] = $object->getAwsSessionName();
        }
        if (null !== $object->getConnectionType()) {
            $data['connectionType'] = $object->getConnectionType();
        }
        if (null !== $object->getEventSource()) {
            $data['eventSource'] = $object->getEventSource();
        }
        if (null !== $object->getExchangeServerHostname()) {
            $data['exchangeServerHostname'] = $object->getExchangeServerHostname();
        }
        if (null !== $object->getExchangeUser()) {
            $data['exchangeUser'] = $object->getExchangeUser();
        }
        if (null !== $object->getFolderPath()) {
            $data['folderPath'] = $object->getFolderPath();
        }
        if (null !== $object->getLdapServer()) {
            $data['ldapServer'] = $object->getLdapServer();
        }
        if (null !== $object->getName()) {
            $data['name'] = $object->getName();
        }
        if (null !== $object->getPort()) {
            $data['port'] = $object->getPort();
        }
        if (null !== $object->getProtocol()) {
            $data['protocol'] = $object->getProtocol();
        }
        if (null !== $object->getRegion()) {
            $data['region'] = $object->getRegion();
        }
        if (null !== $object->getScanEngineIsInsideAWS()) {
            $data['scanEngineIsInsideAWS'] = $object->getScanEngineIsInsideAWS();
        }
        if (null !== $object->getSecretAccessKey()) {
            $data['secretAccessKey'] = $object->getSecretAccessKey();
        }
        if (null !== $object->getStatus()) {
            $data['status'] = $object->getStatus();
        }
        if (null !== $object->getUsername()) {
            $data['username'] = $object->getUsername();
        }
        if (null !== $object->getWinRMServer()) {
            $data['winRMServer'] = $object->getWinRMServer();
        }
        return $data;
    }
}