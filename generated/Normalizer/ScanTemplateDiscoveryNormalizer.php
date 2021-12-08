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
class ScanTemplateDiscoveryNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Rapid7\\InsightVM\\Api\\Model\\ScanTemplateDiscovery';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Rapid7\\InsightVM\\Api\\Model\\ScanTemplateDiscovery';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Rapid7\InsightVM\Api\Model\ScanTemplateDiscovery();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('asset', $data)) {
            $object->setAsset($this->denormalizer->denormalize($data['asset'], 'Rapid7\\InsightVM\\Api\\Model\\ScanTemplateAssetDiscovery', 'json', $context));
        }
        if (\array_key_exists('perfomance', $data)) {
            $object->setPerfomance($this->denormalizer->denormalize($data['perfomance'], 'Rapid7\\InsightVM\\Api\\Model\\ScanTemplateDiscoveryPerformance', 'json', $context));
        }
        if (\array_key_exists('service', $data)) {
            $object->setService($this->denormalizer->denormalize($data['service'], 'Rapid7\\InsightVM\\Api\\Model\\ScanTemplateServiceDiscovery', 'json', $context));
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getAsset()) {
            $data['asset'] = $this->normalizer->normalize($object->getAsset(), 'json', $context);
        }
        if (null !== $object->getPerfomance()) {
            $data['perfomance'] = $this->normalizer->normalize($object->getPerfomance(), 'json', $context);
        }
        if (null !== $object->getService()) {
            $data['service'] = $this->normalizer->normalize($object->getService(), 'json', $context);
        }
        return $data;
    }
}