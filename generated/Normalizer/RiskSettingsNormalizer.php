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
class RiskSettingsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Rapid7\\InsightVM\\Api\\Model\\RiskSettings';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Rapid7\\InsightVM\\Api\\Model\\RiskSettings';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Rapid7\InsightVM\Api\Model\RiskSettings();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('adjustWithCriticality', $data)) {
            $object->setAdjustWithCriticality($data['adjustWithCriticality']);
        }
        if (\array_key_exists('criticalityModifiers', $data)) {
            $object->setCriticalityModifiers($this->denormalizer->denormalize($data['criticalityModifiers'], 'Rapid7\\InsightVM\\Api\\Model\\RiskModifierSettings', 'json', $context));
        }
        if (\array_key_exists('model', $data)) {
            $object->setModel($data['model']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getAdjustWithCriticality()) {
            $data['adjustWithCriticality'] = $object->getAdjustWithCriticality();
        }
        if (null !== $object->getCriticalityModifiers()) {
            $data['criticalityModifiers'] = $this->normalizer->normalize($object->getCriticalityModifiers(), 'json', $context);
        }
        if (null !== $object->getModel()) {
            $data['model'] = $object->getModel();
        }
        return $data;
    }
}