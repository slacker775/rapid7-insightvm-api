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
class SoftwareCpeNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Rapid7\\InsightVM\\Api\\Model\\SoftwareCpe';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Rapid7\\InsightVM\\Api\\Model\\SoftwareCpe';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Rapid7\InsightVM\Api\Model\SoftwareCpe();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('edition', $data)) {
            $object->setEdition($data['edition']);
        }
        if (\array_key_exists('language', $data)) {
            $object->setLanguage($data['language']);
        }
        if (\array_key_exists('other', $data)) {
            $object->setOther($data['other']);
        }
        if (\array_key_exists('part', $data)) {
            $object->setPart($data['part']);
        }
        if (\array_key_exists('product', $data)) {
            $object->setProduct($data['product']);
        }
        if (\array_key_exists('swEdition', $data)) {
            $object->setSwEdition($data['swEdition']);
        }
        if (\array_key_exists('targetHW', $data)) {
            $object->setTargetHW($data['targetHW']);
        }
        if (\array_key_exists('targetSW', $data)) {
            $object->setTargetSW($data['targetSW']);
        }
        if (\array_key_exists('update', $data)) {
            $object->setUpdate($data['update']);
        }
        if (\array_key_exists('v2.2', $data)) {
            $object->setV22($data['v2.2']);
        }
        if (\array_key_exists('v2.3', $data)) {
            $object->setV23($data['v2.3']);
        }
        if (\array_key_exists('vendor', $data)) {
            $object->setVendor($data['vendor']);
        }
        if (\array_key_exists('version', $data)) {
            $object->setVersion($data['version']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getEdition()) {
            $data['edition'] = $object->getEdition();
        }
        if (null !== $object->getLanguage()) {
            $data['language'] = $object->getLanguage();
        }
        if (null !== $object->getOther()) {
            $data['other'] = $object->getOther();
        }
        $data['part'] = $object->getPart();
        if (null !== $object->getProduct()) {
            $data['product'] = $object->getProduct();
        }
        if (null !== $object->getSwEdition()) {
            $data['swEdition'] = $object->getSwEdition();
        }
        if (null !== $object->getTargetHW()) {
            $data['targetHW'] = $object->getTargetHW();
        }
        if (null !== $object->getTargetSW()) {
            $data['targetSW'] = $object->getTargetSW();
        }
        if (null !== $object->getUpdate()) {
            $data['update'] = $object->getUpdate();
        }
        if (null !== $object->getV22()) {
            $data['v2.2'] = $object->getV22();
        }
        if (null !== $object->getV23()) {
            $data['v2.3'] = $object->getV23();
        }
        if (null !== $object->getVendor()) {
            $data['vendor'] = $object->getVendor();
        }
        if (null !== $object->getVersion()) {
            $data['version'] = $object->getVersion();
        }
        return $data;
    }
}