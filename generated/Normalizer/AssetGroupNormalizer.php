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
class AssetGroupNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Rapid7\\InsightVM\\Api\\Model\\AssetGroup';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Rapid7\\InsightVM\\Api\\Model\\AssetGroup';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Rapid7\InsightVM\Api\Model\AssetGroup();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('assets', $data)) {
            $object->setAssets($data['assets']);
        }
        if (\array_key_exists('description', $data)) {
            $object->setDescription($data['description']);
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
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
        }
        if (\array_key_exists('riskScore', $data)) {
            $object->setRiskScore($data['riskScore']);
        }
        if (\array_key_exists('searchCriteria', $data)) {
            $object->setSearchCriteria($this->denormalizer->denormalize($data['searchCriteria'], 'Rapid7\\InsightVM\\Api\\Model\\SearchCriteria', 'json', $context));
        }
        if (\array_key_exists('type', $data)) {
            $object->setType($data['type']);
        }
        if (\array_key_exists('vulnerabilities', $data)) {
            $object->setVulnerabilities($this->denormalizer->denormalize($data['vulnerabilities'], 'Rapid7\\InsightVM\\Api\\Model\\Vulnerabilities', 'json', $context));
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getDescription()) {
            $data['description'] = $object->getDescription();
        }
        $data['name'] = $object->getName();
        if (null !== $object->getSearchCriteria()) {
            $data['searchCriteria'] = $this->normalizer->normalize($object->getSearchCriteria(), 'json', $context);
        }
        $data['type'] = $object->getType();
        if (null !== $object->getVulnerabilities()) {
            $data['vulnerabilities'] = $this->normalizer->normalize($object->getVulnerabilities(), 'json', $context);
        }
        return $data;
    }
}