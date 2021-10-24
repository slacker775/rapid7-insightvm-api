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
class RiskModifierSettingsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Rapid7\\InsightVM\\Api\\Model\\RiskModifierSettings';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Rapid7\\InsightVM\\Api\\Model\\RiskModifierSettings';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Rapid7\InsightVM\Api\Model\RiskModifierSettings();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('high', $data)) {
            $object->setHigh($data['high']);
        }
        if (\array_key_exists('low', $data)) {
            $object->setLow($data['low']);
        }
        if (\array_key_exists('medium', $data)) {
            $object->setMedium($data['medium']);
        }
        if (\array_key_exists('veryHigh', $data)) {
            $object->setVeryHigh($data['veryHigh']);
        }
        if (\array_key_exists('veryLow', $data)) {
            $object->setVeryLow($data['veryLow']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getHigh()) {
            $data['high'] = $object->getHigh();
        }
        if (null !== $object->getLow()) {
            $data['low'] = $object->getLow();
        }
        if (null !== $object->getMedium()) {
            $data['medium'] = $object->getMedium();
        }
        if (null !== $object->getVeryHigh()) {
            $data['veryHigh'] = $object->getVeryHigh();
        }
        if (null !== $object->getVeryLow()) {
            $data['veryLow'] = $object->getVeryLow();
        }
        return $data;
    }
}