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
class ScanTemplateNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Rapid7\\InsightVM\\Api\\Model\\ScanTemplate';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Rapid7\\InsightVM\\Api\\Model\\ScanTemplate';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Rapid7\InsightVM\Api\Model\ScanTemplate();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('checks', $data)) {
            $object->setChecks($this->denormalizer->denormalize($data['checks'], 'Rapid7\\InsightVM\\Api\\Model\\ScanTemplateVulnerabilityChecks', 'json', $context));
        }
        if (\array_key_exists('database', $data)) {
            $object->setDatabase($this->denormalizer->denormalize($data['database'], 'Rapid7\\InsightVM\\Api\\Model\\ScanTemplateDatabase', 'json', $context));
        }
        if (\array_key_exists('description', $data)) {
            $object->setDescription($data['description']);
        }
        if (\array_key_exists('discovery', $data)) {
            $object->setDiscovery($this->denormalizer->denormalize($data['discovery'], 'Rapid7\\InsightVM\\Api\\Model\\ScanTemplateDiscovery', 'json', $context));
        }
        if (\array_key_exists('discoveryOnly', $data)) {
            $object->setDiscoveryOnly($data['discoveryOnly']);
        }
        if (\array_key_exists('enableWindowsServices', $data)) {
            $object->setEnableWindowsServices($data['enableWindowsServices']);
        }
        if (\array_key_exists('enhancedLogging', $data)) {
            $object->setEnhancedLogging($data['enhancedLogging']);
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
        if (\array_key_exists('maxParallelAssets', $data)) {
            $object->setMaxParallelAssets($data['maxParallelAssets']);
        }
        if (\array_key_exists('maxScanProcesses', $data)) {
            $object->setMaxScanProcesses($data['maxScanProcesses']);
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
        }
        if (\array_key_exists('policy', $data)) {
            $object->setPolicy($this->denormalizer->denormalize($data['policy'], 'Rapid7\\InsightVM\\Api\\Model\\Policy', 'json', $context));
        }
        if (\array_key_exists('policyEnabled', $data)) {
            $object->setPolicyEnabled($data['policyEnabled']);
        }
        if (\array_key_exists('telnet', $data)) {
            $object->setTelnet($this->denormalizer->denormalize($data['telnet'], 'Rapid7\\InsightVM\\Api\\Model\\Telnet', 'json', $context));
        }
        if (\array_key_exists('vulnerabilityEnabled', $data)) {
            $object->setVulnerabilityEnabled($data['vulnerabilityEnabled']);
        }
        if (\array_key_exists('web', $data)) {
            $object->setWeb($this->denormalizer->denormalize($data['web'], 'Rapid7\\InsightVM\\Api\\Model\\ScanTemplateWebSpider', 'json', $context));
        }
        if (\array_key_exists('webEnabled', $data)) {
            $object->setWebEnabled($data['webEnabled']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getChecks()) {
            $data['checks'] = $this->normalizer->normalize($object->getChecks(), 'json', $context);
        }
        if (null !== $object->getDatabase()) {
            $data['database'] = $this->normalizer->normalize($object->getDatabase(), 'json', $context);
        }
        if (null !== $object->getDescription()) {
            $data['description'] = $object->getDescription();
        }
        if (null !== $object->getDiscovery()) {
            $data['discovery'] = $this->normalizer->normalize($object->getDiscovery(), 'json', $context);
        }
        if (null !== $object->getDiscoveryOnly()) {
            $data['discoveryOnly'] = $object->getDiscoveryOnly();
        }
        if (null !== $object->getEnableWindowsServices()) {
            $data['enableWindowsServices'] = $object->getEnableWindowsServices();
        }
        if (null !== $object->getEnhancedLogging()) {
            $data['enhancedLogging'] = $object->getEnhancedLogging();
        }
        if (null !== $object->getMaxParallelAssets()) {
            $data['maxParallelAssets'] = $object->getMaxParallelAssets();
        }
        if (null !== $object->getMaxScanProcesses()) {
            $data['maxScanProcesses'] = $object->getMaxScanProcesses();
        }
        if (null !== $object->getName()) {
            $data['name'] = $object->getName();
        }
        if (null !== $object->getPolicy()) {
            $data['policy'] = $this->normalizer->normalize($object->getPolicy(), 'json', $context);
        }
        if (null !== $object->getPolicyEnabled()) {
            $data['policyEnabled'] = $object->getPolicyEnabled();
        }
        if (null !== $object->getTelnet()) {
            $data['telnet'] = $this->normalizer->normalize($object->getTelnet(), 'json', $context);
        }
        if (null !== $object->getVulnerabilityEnabled()) {
            $data['vulnerabilityEnabled'] = $object->getVulnerabilityEnabled();
        }
        if (null !== $object->getWeb()) {
            $data['web'] = $this->normalizer->normalize($object->getWeb(), 'json', $context);
        }
        if (null !== $object->getWebEnabled()) {
            $data['webEnabled'] = $object->getWebEnabled();
        }
        return $data;
    }
}