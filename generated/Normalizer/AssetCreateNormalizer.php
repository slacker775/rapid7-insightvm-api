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
class AssetCreateNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Rapid7\\InsightVM\\Api\\Model\\AssetCreate';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Rapid7\\InsightVM\\Api\\Model\\AssetCreate';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Rapid7\InsightVM\Api\Model\AssetCreate();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('addresses', $data)) {
            $values = array();
            foreach ($data['addresses'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Rapid7\\InsightVM\\Api\\Model\\Address', 'json', $context);
            }
            $object->setAddresses($values);
        }
        if (\array_key_exists('assessedForPolicies', $data)) {
            $object->setAssessedForPolicies($data['assessedForPolicies']);
        }
        if (\array_key_exists('assessedForVulnerabilities', $data)) {
            $object->setAssessedForVulnerabilities($data['assessedForVulnerabilities']);
        }
        if (\array_key_exists('configurations', $data)) {
            $values_1 = array();
            foreach ($data['configurations'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Rapid7\\InsightVM\\Api\\Model\\Configuration', 'json', $context);
            }
            $object->setConfigurations($values_1);
        }
        if (\array_key_exists('cpe', $data)) {
            $object->setCpe($data['cpe']);
        }
        if (\array_key_exists('databases', $data)) {
            $values_2 = array();
            foreach ($data['databases'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, 'Rapid7\\InsightVM\\Api\\Model\\Database', 'json', $context);
            }
            $object->setDatabases($values_2);
        }
        if (\array_key_exists('date', $data)) {
            $object->setDate($data['date']);
        }
        if (\array_key_exists('description', $data)) {
            $object->setDescription($data['description']);
        }
        if (\array_key_exists('files', $data)) {
            $values_3 = array();
            foreach ($data['files'] as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, 'Rapid7\\InsightVM\\Api\\Model\\File', 'json', $context);
            }
            $object->setFiles($values_3);
        }
        if (\array_key_exists('history', $data)) {
            $values_4 = array();
            foreach ($data['history'] as $value_4) {
                $values_4[] = $this->denormalizer->denormalize($value_4, 'Rapid7\\InsightVM\\Api\\Model\\AssetHistory', 'json', $context);
            }
            $object->setHistory($values_4);
        }
        if (\array_key_exists('hostName', $data)) {
            $object->setHostName($this->denormalizer->denormalize($data['hostName'], 'Rapid7\\InsightVM\\Api\\Model\\HostName', 'json', $context));
        }
        if (\array_key_exists('hostNames', $data)) {
            $values_5 = array();
            foreach ($data['hostNames'] as $value_5) {
                $values_5[] = $this->denormalizer->denormalize($value_5, 'Rapid7\\InsightVM\\Api\\Model\\HostName', 'json', $context);
            }
            $object->setHostNames($values_5);
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (\array_key_exists('ids', $data)) {
            $values_6 = array();
            foreach ($data['ids'] as $value_6) {
                $values_6[] = $this->denormalizer->denormalize($value_6, 'Rapid7\\InsightVM\\Api\\Model\\UniqueId', 'json', $context);
            }
            $object->setIds($values_6);
        }
        if (\array_key_exists('ip', $data)) {
            $object->setIp($data['ip']);
        }
        if (\array_key_exists('links', $data)) {
            $values_7 = array();
            foreach ($data['links'] as $value_7) {
                $values_7[] = $this->denormalizer->denormalize($value_7, 'Rapid7\\InsightVM\\Api\\Model\\Link', 'json', $context);
            }
            $object->setLinks($values_7);
        }
        if (\array_key_exists('mac', $data)) {
            $object->setMac($data['mac']);
        }
        if (\array_key_exists('os', $data)) {
            $object->setOs($data['os']);
        }
        if (\array_key_exists('osFingerprint', $data)) {
            $object->setOsFingerprint($this->denormalizer->denormalize($data['osFingerprint'], 'Rapid7\\InsightVM\\Api\\Model\\OperatingSystem', 'json', $context));
        }
        if (\array_key_exists('rawRiskScore', $data)) {
            $object->setRawRiskScore($data['rawRiskScore']);
        }
        if (\array_key_exists('riskScore', $data)) {
            $object->setRiskScore($data['riskScore']);
        }
        if (\array_key_exists('services', $data)) {
            $values_8 = array();
            foreach ($data['services'] as $value_8) {
                $values_8[] = $this->denormalizer->denormalize($value_8, 'Rapid7\\InsightVM\\Api\\Model\\Service', 'json', $context);
            }
            $object->setServices($values_8);
        }
        if (\array_key_exists('software', $data)) {
            $values_9 = array();
            foreach ($data['software'] as $value_9) {
                $values_9[] = $this->denormalizer->denormalize($value_9, 'Rapid7\\InsightVM\\Api\\Model\\Software', 'json', $context);
            }
            $object->setSoftware($values_9);
        }
        if (\array_key_exists('type', $data)) {
            $object->setType($data['type']);
        }
        if (\array_key_exists('userGroups', $data)) {
            $values_10 = array();
            foreach ($data['userGroups'] as $value_10) {
                $values_10[] = $this->denormalizer->denormalize($value_10, 'Rapid7\\InsightVM\\Api\\Model\\GroupAccount', 'json', $context);
            }
            $object->setUserGroups($values_10);
        }
        if (\array_key_exists('users', $data)) {
            $values_11 = array();
            foreach ($data['users'] as $value_11) {
                $values_11[] = $this->denormalizer->denormalize($value_11, 'Rapid7\\InsightVM\\Api\\Model\\UserAccount', 'json', $context);
            }
            $object->setUsers($values_11);
        }
        if (\array_key_exists('vulnerabilities', $data)) {
            $object->setVulnerabilities($this->denormalizer->denormalize($data['vulnerabilities'], 'Rapid7\\InsightVM\\Api\\Model\\AssetVulnerabilities', 'json', $context));
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getAddresses()) {
            $values = array();
            foreach ($object->getAddresses() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['addresses'] = $values;
        }
        if (null !== $object->getConfigurations()) {
            $values_1 = array();
            foreach ($object->getConfigurations() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['configurations'] = $values_1;
        }
        if (null !== $object->getCpe()) {
            $data['cpe'] = $object->getCpe();
        }
        if (null !== $object->getDatabases()) {
            $values_2 = array();
            foreach ($object->getDatabases() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $data['databases'] = $values_2;
        }
        $data['date'] = $object->getDate();
        if (null !== $object->getDescription()) {
            $data['description'] = $object->getDescription();
        }
        if (null !== $object->getFiles()) {
            $values_3 = array();
            foreach ($object->getFiles() as $value_3) {
                $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
            }
            $data['files'] = $values_3;
        }
        if (null !== $object->getHostName()) {
            $data['hostName'] = $this->normalizer->normalize($object->getHostName(), 'json', $context);
        }
        if (null !== $object->getHostNames()) {
            $values_4 = array();
            foreach ($object->getHostNames() as $value_4) {
                $values_4[] = $this->normalizer->normalize($value_4, 'json', $context);
            }
            $data['hostNames'] = $values_4;
        }
        if (null !== $object->getId()) {
            $data['id'] = $object->getId();
        }
        if (null !== $object->getIds()) {
            $values_5 = array();
            foreach ($object->getIds() as $value_5) {
                $values_5[] = $this->normalizer->normalize($value_5, 'json', $context);
            }
            $data['ids'] = $values_5;
        }
        if (null !== $object->getIp()) {
            $data['ip'] = $object->getIp();
        }
        if (null !== $object->getLinks()) {
            $values_6 = array();
            foreach ($object->getLinks() as $value_6) {
                $values_6[] = $this->normalizer->normalize($value_6, 'json', $context);
            }
            $data['links'] = $values_6;
        }
        if (null !== $object->getMac()) {
            $data['mac'] = $object->getMac();
        }
        if (null !== $object->getOs()) {
            $data['os'] = $object->getOs();
        }
        if (null !== $object->getOsFingerprint()) {
            $data['osFingerprint'] = $this->normalizer->normalize($object->getOsFingerprint(), 'json', $context);
        }
        if (null !== $object->getServices()) {
            $values_7 = array();
            foreach ($object->getServices() as $value_7) {
                $values_7[] = $this->normalizer->normalize($value_7, 'json', $context);
            }
            $data['services'] = $values_7;
        }
        if (null !== $object->getSoftware()) {
            $values_8 = array();
            foreach ($object->getSoftware() as $value_8) {
                $values_8[] = $this->normalizer->normalize($value_8, 'json', $context);
            }
            $data['software'] = $values_8;
        }
        if (null !== $object->getType()) {
            $data['type'] = $object->getType();
        }
        if (null !== $object->getUserGroups()) {
            $values_9 = array();
            foreach ($object->getUserGroups() as $value_9) {
                $values_9[] = $this->normalizer->normalize($value_9, 'json', $context);
            }
            $data['userGroups'] = $values_9;
        }
        if (null !== $object->getUsers()) {
            $values_10 = array();
            foreach ($object->getUsers() as $value_10) {
                $values_10[] = $this->normalizer->normalize($value_10, 'json', $context);
            }
            $data['users'] = $values_10;
        }
        if (null !== $object->getVulnerabilities()) {
            $data['vulnerabilities'] = $this->normalizer->normalize($object->getVulnerabilities(), 'json', $context);
        }
        return $data;
    }
}