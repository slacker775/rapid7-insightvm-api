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
class SettingsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Rapid7\\InsightVM\\Api\\Model\\Settings';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Rapid7\\InsightVM\\Api\\Model\\Settings';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Rapid7\InsightVM\Api\Model\Settings();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('assetLinking', $data)) {
            $object->setAssetLinking($data['assetLinking']);
        }
        if (\array_key_exists('authentication', $data)) {
            $object->setAuthentication($this->denormalizer->denormalize($data['authentication'], 'Rapid7\\InsightVM\\Api\\Model\\AuthenticationSettings', 'json', $context));
        }
        if (\array_key_exists('database', $data)) {
            $object->setDatabase($this->denormalizer->denormalize($data['database'], 'Rapid7\\InsightVM\\Api\\Model\\DatabaseSettings', 'json', $context));
        }
        if (\array_key_exists('directory', $data)) {
            $object->setDirectory($data['directory']);
        }
        if (\array_key_exists('insightPlatform', $data)) {
            $object->setInsightPlatform($data['insightPlatform']);
        }
        if (\array_key_exists('insightPlatformRegion', $data)) {
            $object->setInsightPlatformRegion($data['insightPlatformRegion']);
        }
        if (\array_key_exists('links', $data)) {
            $values = array();
            foreach ($data['links'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Rapid7\\InsightVM\\Api\\Model\\Link', 'json', $context);
            }
            $object->setLinks($values);
        }
        if (\array_key_exists('risk', $data)) {
            $object->setRisk($this->denormalizer->denormalize($data['risk'], 'Rapid7\\InsightVM\\Api\\Model\\RiskSettings', 'json', $context));
        }
        if (\array_key_exists('scan', $data)) {
            $object->setScan($this->denormalizer->denormalize($data['scan'], 'Rapid7\\InsightVM\\Api\\Model\\ScanSettings', 'json', $context));
        }
        if (\array_key_exists('serialNumber', $data)) {
            $object->setSerialNumber($data['serialNumber']);
        }
        if (\array_key_exists('smtp', $data)) {
            $object->setSmtp($this->denormalizer->denormalize($data['smtp'], 'Rapid7\\InsightVM\\Api\\Model\\SmtpSettings', 'json', $context));
        }
        if (\array_key_exists('updates', $data)) {
            $object->setUpdates($this->denormalizer->denormalize($data['updates'], 'Rapid7\\InsightVM\\Api\\Model\\UpdateSettings', 'json', $context));
        }
        if (\array_key_exists('uuid', $data)) {
            $object->setUuid($data['uuid']);
        }
        if (\array_key_exists('web', $data)) {
            $object->setWeb($this->denormalizer->denormalize($data['web'], 'Rapid7\\InsightVM\\Api\\Model\\WebSettings', 'json', $context));
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getAssetLinking()) {
            $data['assetLinking'] = $object->getAssetLinking();
        }
        if (null !== $object->getAuthentication()) {
            $data['authentication'] = $this->normalizer->normalize($object->getAuthentication(), 'json', $context);
        }
        if (null !== $object->getDatabase()) {
            $data['database'] = $this->normalizer->normalize($object->getDatabase(), 'json', $context);
        }
        if (null !== $object->getDirectory()) {
            $data['directory'] = $object->getDirectory();
        }
        if (null !== $object->getInsightPlatform()) {
            $data['insightPlatform'] = $object->getInsightPlatform();
        }
        if (null !== $object->getInsightPlatformRegion()) {
            $data['insightPlatformRegion'] = $object->getInsightPlatformRegion();
        }
        if (null !== $object->getRisk()) {
            $data['risk'] = $this->normalizer->normalize($object->getRisk(), 'json', $context);
        }
        if (null !== $object->getScan()) {
            $data['scan'] = $this->normalizer->normalize($object->getScan(), 'json', $context);
        }
        if (null !== $object->getSerialNumber()) {
            $data['serialNumber'] = $object->getSerialNumber();
        }
        if (null !== $object->getSmtp()) {
            $data['smtp'] = $this->normalizer->normalize($object->getSmtp(), 'json', $context);
        }
        if (null !== $object->getUpdates()) {
            $data['updates'] = $this->normalizer->normalize($object->getUpdates(), 'json', $context);
        }
        if (null !== $object->getUuid()) {
            $data['uuid'] = $object->getUuid();
        }
        if (null !== $object->getWeb()) {
            $data['web'] = $this->normalizer->normalize($object->getWeb(), 'json', $context);
        }
        return $data;
    }
}