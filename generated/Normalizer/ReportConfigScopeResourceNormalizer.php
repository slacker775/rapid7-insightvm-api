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
class ReportConfigScopeResourceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Rapid7\\InsightVM\\Api\\Model\\ReportConfigScopeResource';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Rapid7\\InsightVM\\Api\\Model\\ReportConfigScopeResource';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Rapid7\InsightVM\Api\Model\ReportConfigScopeResource();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('assetGroups', $data)) {
            $values = array();
            foreach ($data['assetGroups'] as $value) {
                $values[] = $value;
            }
            $object->setAssetGroups($values);
        }
        if (\array_key_exists('assets', $data)) {
            $values_1 = array();
            foreach ($data['assets'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setAssets($values_1);
        }
        if (\array_key_exists('scan', $data)) {
            $object->setScan($data['scan']);
        }
        if (\array_key_exists('sites', $data)) {
            $values_2 = array();
            foreach ($data['sites'] as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setSites($values_2);
        }
        if (\array_key_exists('tags', $data)) {
            $values_3 = array();
            foreach ($data['tags'] as $value_3) {
                $values_3[] = $value_3;
            }
            $object->setTags($values_3);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getAssetGroups()) {
            $values = array();
            foreach ($object->getAssetGroups() as $value) {
                $values[] = $value;
            }
            $data['assetGroups'] = $values;
        }
        if (null !== $object->getAssets()) {
            $values_1 = array();
            foreach ($object->getAssets() as $value_1) {
                $values_1[] = $value_1;
            }
            $data['assets'] = $values_1;
        }
        if (null !== $object->getScan()) {
            $data['scan'] = $object->getScan();
        }
        if (null !== $object->getSites()) {
            $values_2 = array();
            foreach ($object->getSites() as $value_2) {
                $values_2[] = $value_2;
            }
            $data['sites'] = $values_2;
        }
        if (null !== $object->getTags()) {
            $values_3 = array();
            foreach ($object->getTags() as $value_3) {
                $values_3[] = $value_3;
            }
            $data['tags'] = $values_3;
        }
        return $data;
    }
}