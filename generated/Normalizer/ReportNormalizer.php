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
class ReportNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Rapid7\\InsightVM\\Api\\Model\\Report';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Rapid7\\InsightVM\\Api\\Model\\Report';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Rapid7\InsightVM\Api\Model\Report();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('bureau', $data)) {
            $object->setBureau($data['bureau']);
        }
        if (\array_key_exists('component', $data)) {
            $object->setComponent($data['component']);
        }
        if (\array_key_exists('database', $data)) {
            $object->setDatabase($this->denormalizer->denormalize($data['database'], 'Rapid7\\InsightVM\\Api\\Model\\ReportConfigDatabaseResource', 'json', $context));
        }
        if (\array_key_exists('email', $data)) {
            $object->setEmail($this->denormalizer->denormalize($data['email'], 'Rapid7\\InsightVM\\Api\\Model\\ReportEmail', 'json', $context));
        }
        if (\array_key_exists('enclave', $data)) {
            $object->setEnclave($data['enclave']);
        }
        if (\array_key_exists('filters', $data)) {
            $object->setFilters($this->denormalizer->denormalize($data['filters'], 'Rapid7\\InsightVM\\Api\\Model\\ReportConfigFiltersResource', 'json', $context));
        }
        if (\array_key_exists('format', $data)) {
            $object->setFormat($data['format']);
        }
        if (\array_key_exists('frequency', $data)) {
            $object->setFrequency($this->denormalizer->denormalize($data['frequency'], 'Rapid7\\InsightVM\\Api\\Model\\ReportFrequency', 'json', $context));
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (\array_key_exists('language', $data)) {
            $object->setLanguage($data['language']);
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
        if (\array_key_exists('organization', $data)) {
            $object->setOrganization($data['organization']);
        }
        if (\array_key_exists('owner', $data)) {
            $object->setOwner($data['owner']);
        }
        if (\array_key_exists('policy', $data)) {
            $object->setPolicy($data['policy']);
        }
        if (\array_key_exists('query', $data)) {
            $object->setQuery($data['query']);
        }
        if (\array_key_exists('scope', $data)) {
            $object->setScope($this->denormalizer->denormalize($data['scope'], 'Rapid7\\InsightVM\\Api\\Model\\ReportConfigScopeResource', 'json', $context));
        }
        if (\array_key_exists('storage', $data)) {
            $object->setStorage($this->denormalizer->denormalize($data['storage'], 'Rapid7\\InsightVM\\Api\\Model\\ReportStorage', 'json', $context));
        }
        if (\array_key_exists('template', $data)) {
            $object->setTemplate($data['template']);
        }
        if (\array_key_exists('timezone', $data)) {
            $object->setTimezone($data['timezone']);
        }
        if (\array_key_exists('users', $data)) {
            $values_1 = array();
            foreach ($data['users'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setUsers($values_1);
        }
        if (\array_key_exists('version', $data)) {
            $object->setVersion($data['version']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getBureau()) {
            $data['bureau'] = $object->getBureau();
        }
        if (null !== $object->getComponent()) {
            $data['component'] = $object->getComponent();
        }
        if (null !== $object->getDatabase()) {
            $data['database'] = $this->normalizer->normalize($object->getDatabase(), 'json', $context);
        }
        if (null !== $object->getEmail()) {
            $data['email'] = $this->normalizer->normalize($object->getEmail(), 'json', $context);
        }
        if (null !== $object->getEnclave()) {
            $data['enclave'] = $object->getEnclave();
        }
        if (null !== $object->getFilters()) {
            $data['filters'] = $this->normalizer->normalize($object->getFilters(), 'json', $context);
        }
        if (null !== $object->getFormat()) {
            $data['format'] = $object->getFormat();
        }
        if (null !== $object->getFrequency()) {
            $data['frequency'] = $this->normalizer->normalize($object->getFrequency(), 'json', $context);
        }
        if (null !== $object->getLanguage()) {
            $data['language'] = $object->getLanguage();
        }
        if (null !== $object->getName()) {
            $data['name'] = $object->getName();
        }
        if (null !== $object->getOrganization()) {
            $data['organization'] = $object->getOrganization();
        }
        if (null !== $object->getOwner()) {
            $data['owner'] = $object->getOwner();
        }
        if (null !== $object->getPolicy()) {
            $data['policy'] = $object->getPolicy();
        }
        if (null !== $object->getQuery()) {
            $data['query'] = $object->getQuery();
        }
        if (null !== $object->getScope()) {
            $data['scope'] = $this->normalizer->normalize($object->getScope(), 'json', $context);
        }
        if (null !== $object->getStorage()) {
            $data['storage'] = $this->normalizer->normalize($object->getStorage(), 'json', $context);
        }
        if (null !== $object->getTemplate()) {
            $data['template'] = $object->getTemplate();
        }
        if (null !== $object->getTimezone()) {
            $data['timezone'] = $object->getTimezone();
        }
        if (null !== $object->getUsers()) {
            $values = array();
            foreach ($object->getUsers() as $value) {
                $values[] = $value;
            }
            $data['users'] = $values;
        }
        if (null !== $object->getVersion()) {
            $data['version'] = $object->getVersion();
        }
        return $data;
    }
}