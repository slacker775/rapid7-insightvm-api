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
class ScanTemplateAssetDiscoveryNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Rapid7\\InsightVM\\Api\\Model\\ScanTemplateAssetDiscovery';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Rapid7\\InsightVM\\Api\\Model\\ScanTemplateAssetDiscovery';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Rapid7\InsightVM\Api\Model\ScanTemplateAssetDiscovery();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('collectWhoisInformation', $data)) {
            $object->setCollectWhoisInformation($data['collectWhoisInformation']);
        }
        if (\array_key_exists('fingerprintMinimumCertainty', $data)) {
            $object->setFingerprintMinimumCertainty($data['fingerprintMinimumCertainty']);
        }
        if (\array_key_exists('fingerprintRetries', $data)) {
            $object->setFingerprintRetries($data['fingerprintRetries']);
        }
        if (\array_key_exists('ipFingerprintingEnabled', $data)) {
            $object->setIpFingerprintingEnabled($data['ipFingerprintingEnabled']);
        }
        if (\array_key_exists('sendArpPings', $data)) {
            $object->setSendArpPings($data['sendArpPings']);
        }
        if (\array_key_exists('sendIcmpPings', $data)) {
            $object->setSendIcmpPings($data['sendIcmpPings']);
        }
        if (\array_key_exists('tcpPorts', $data)) {
            $values = array();
            foreach ($data['tcpPorts'] as $value) {
                $values[] = $value;
            }
            $object->setTcpPorts($values);
        }
        if (\array_key_exists('treatTcpResetAsAsset', $data)) {
            $object->setTreatTcpResetAsAsset($data['treatTcpResetAsAsset']);
        }
        if (\array_key_exists('udpPorts', $data)) {
            $values_1 = array();
            foreach ($data['udpPorts'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setUdpPorts($values_1);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getCollectWhoisInformation()) {
            $data['collectWhoisInformation'] = $object->getCollectWhoisInformation();
        }
        if (null !== $object->getFingerprintMinimumCertainty()) {
            $data['fingerprintMinimumCertainty'] = $object->getFingerprintMinimumCertainty();
        }
        if (null !== $object->getFingerprintRetries()) {
            $data['fingerprintRetries'] = $object->getFingerprintRetries();
        }
        if (null !== $object->getIpFingerprintingEnabled()) {
            $data['ipFingerprintingEnabled'] = $object->getIpFingerprintingEnabled();
        }
        if (null !== $object->getSendArpPings()) {
            $data['sendArpPings'] = $object->getSendArpPings();
        }
        if (null !== $object->getSendIcmpPings()) {
            $data['sendIcmpPings'] = $object->getSendIcmpPings();
        }
        if (null !== $object->getTcpPorts()) {
            $values = array();
            foreach ($object->getTcpPorts() as $value) {
                $values[] = $value;
            }
            $data['tcpPorts'] = $values;
        }
        if (null !== $object->getTreatTcpResetAsAsset()) {
            $data['treatTcpResetAsAsset'] = $object->getTreatTcpResetAsAsset();
        }
        if (null !== $object->getUdpPorts()) {
            $values_1 = array();
            foreach ($object->getUdpPorts() as $value_1) {
                $values_1[] = $value_1;
            }
            $data['udpPorts'] = $values_1;
        }
        return $data;
    }
}