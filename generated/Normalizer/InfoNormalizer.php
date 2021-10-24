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
class InfoNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Rapid7\\InsightVM\\Api\\Model\\Info';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Rapid7\\InsightVM\\Api\\Model\\Info';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Rapid7\InsightVM\Api\Model\Info();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('cpu', $data)) {
            $object->setCpu($this->denormalizer->denormalize($data['cpu'], 'Rapid7\\InsightVM\\Api\\Model\\CPUInfo', 'json', $context));
        }
        if (\array_key_exists('disk', $data)) {
            $object->setDisk($this->denormalizer->denormalize($data['disk'], 'Rapid7\\InsightVM\\Api\\Model\\DiskInfo', 'json', $context));
        }
        if (\array_key_exists('distinguishedName', $data)) {
            $object->setDistinguishedName($data['distinguishedName']);
        }
        if (\array_key_exists('fqdn', $data)) {
            $object->setFqdn($data['fqdn']);
        }
        if (\array_key_exists('host', $data)) {
            $object->setHost($data['host']);
        }
        if (\array_key_exists('ip', $data)) {
            $object->setIp($data['ip']);
        }
        if (\array_key_exists('jvm', $data)) {
            $object->setJvm($this->denormalizer->denormalize($data['jvm'], 'Rapid7\\InsightVM\\Api\\Model\\JVMInfo', 'json', $context));
        }
        if (\array_key_exists('links', $data)) {
            $values = array();
            foreach ($data['links'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Rapid7\\InsightVM\\Api\\Model\\Link', 'json', $context);
            }
            $object->setLinks($values);
        }
        if (\array_key_exists('memory', $data)) {
            $object->setMemory($this->denormalizer->denormalize($data['memory'], 'Rapid7\\InsightVM\\Api\\Model\\MemoryInfo', 'json', $context));
        }
        if (\array_key_exists('operatingSystem', $data)) {
            $object->setOperatingSystem($data['operatingSystem']);
        }
        if (\array_key_exists('serial', $data)) {
            $object->setSerial($data['serial']);
        }
        if (\array_key_exists('superuser', $data)) {
            $object->setSuperuser($data['superuser']);
        }
        if (\array_key_exists('user', $data)) {
            $object->setUser($data['user']);
        }
        if (\array_key_exists('version', $data)) {
            $object->setVersion($this->denormalizer->denormalize($data['version'], 'Rapid7\\InsightVM\\Api\\Model\\VersionInfo', 'json', $context));
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getCpu()) {
            $data['cpu'] = $this->normalizer->normalize($object->getCpu(), 'json', $context);
        }
        if (null !== $object->getDisk()) {
            $data['disk'] = $this->normalizer->normalize($object->getDisk(), 'json', $context);
        }
        if (null !== $object->getDistinguishedName()) {
            $data['distinguishedName'] = $object->getDistinguishedName();
        }
        if (null !== $object->getFqdn()) {
            $data['fqdn'] = $object->getFqdn();
        }
        if (null !== $object->getHost()) {
            $data['host'] = $object->getHost();
        }
        if (null !== $object->getIp()) {
            $data['ip'] = $object->getIp();
        }
        if (null !== $object->getJvm()) {
            $data['jvm'] = $this->normalizer->normalize($object->getJvm(), 'json', $context);
        }
        if (null !== $object->getMemory()) {
            $data['memory'] = $this->normalizer->normalize($object->getMemory(), 'json', $context);
        }
        if (null !== $object->getOperatingSystem()) {
            $data['operatingSystem'] = $object->getOperatingSystem();
        }
        if (null !== $object->getSerial()) {
            $data['serial'] = $object->getSerial();
        }
        if (null !== $object->getSuperuser()) {
            $data['superuser'] = $object->getSuperuser();
        }
        if (null !== $object->getUser()) {
            $data['user'] = $object->getUser();
        }
        if (null !== $object->getVersion()) {
            $data['version'] = $this->normalizer->normalize($object->getVersion(), 'json', $context);
        }
        return $data;
    }
}