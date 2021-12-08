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
class FeaturesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Rapid7\\InsightVM\\Api\\Model\\Features';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Rapid7\\InsightVM\\Api\\Model\\Features';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Rapid7\InsightVM\Api\Model\Features();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('adaptiveSecurity', $data)) {
            $object->setAdaptiveSecurity($data['adaptiveSecurity']);
        }
        if (\array_key_exists('agents', $data)) {
            $object->setAgents($data['agents']);
        }
        if (\array_key_exists('dynamicDiscovery', $data)) {
            $object->setDynamicDiscovery($data['dynamicDiscovery']);
        }
        if (\array_key_exists('earlyAccess', $data)) {
            $object->setEarlyAccess($data['earlyAccess']);
        }
        if (\array_key_exists('enginePool', $data)) {
            $object->setEnginePool($data['enginePool']);
        }
        if (\array_key_exists('insightPlatform', $data)) {
            $object->setInsightPlatform($data['insightPlatform']);
        }
        if (\array_key_exists('mobile', $data)) {
            $object->setMobile($data['mobile']);
        }
        if (\array_key_exists('multitenancy', $data)) {
            $object->setMultitenancy($data['multitenancy']);
        }
        if (\array_key_exists('policyEditor', $data)) {
            $object->setPolicyEditor($data['policyEditor']);
        }
        if (\array_key_exists('policyManager', $data)) {
            $object->setPolicyManager($data['policyManager']);
        }
        if (\array_key_exists('remediationAnalytics', $data)) {
            $object->setRemediationAnalytics($data['remediationAnalytics']);
        }
        if (\array_key_exists('reporting', $data)) {
            $object->setReporting($this->denormalizer->denormalize($data['reporting'], 'Rapid7\\InsightVM\\Api\\Model\\LicenseReporting', 'json', $context));
        }
        if (\array_key_exists('scanning', $data)) {
            $object->setScanning($this->denormalizer->denormalize($data['scanning'], 'Rapid7\\InsightVM\\Api\\Model\\LicenseScanning', 'json', $context));
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getAdaptiveSecurity()) {
            $data['adaptiveSecurity'] = $object->getAdaptiveSecurity();
        }
        if (null !== $object->getAgents()) {
            $data['agents'] = $object->getAgents();
        }
        if (null !== $object->getDynamicDiscovery()) {
            $data['dynamicDiscovery'] = $object->getDynamicDiscovery();
        }
        if (null !== $object->getEarlyAccess()) {
            $data['earlyAccess'] = $object->getEarlyAccess();
        }
        if (null !== $object->getEnginePool()) {
            $data['enginePool'] = $object->getEnginePool();
        }
        if (null !== $object->getInsightPlatform()) {
            $data['insightPlatform'] = $object->getInsightPlatform();
        }
        if (null !== $object->getMobile()) {
            $data['mobile'] = $object->getMobile();
        }
        if (null !== $object->getMultitenancy()) {
            $data['multitenancy'] = $object->getMultitenancy();
        }
        if (null !== $object->getPolicyEditor()) {
            $data['policyEditor'] = $object->getPolicyEditor();
        }
        if (null !== $object->getPolicyManager()) {
            $data['policyManager'] = $object->getPolicyManager();
        }
        if (null !== $object->getRemediationAnalytics()) {
            $data['remediationAnalytics'] = $object->getRemediationAnalytics();
        }
        if (null !== $object->getReporting()) {
            $data['reporting'] = $this->normalizer->normalize($object->getReporting(), 'json', $context);
        }
        if (null !== $object->getScanning()) {
            $data['scanning'] = $this->normalizer->normalize($object->getScanning(), 'json', $context);
        }
        return $data;
    }
}