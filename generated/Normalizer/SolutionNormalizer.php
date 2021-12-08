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
class SolutionNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Rapid7\\InsightVM\\Api\\Model\\Solution';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Rapid7\\InsightVM\\Api\\Model\\Solution';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Rapid7\InsightVM\Api\Model\Solution();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('additionalInformation', $data)) {
            $object->setAdditionalInformation($this->denormalizer->denormalize($data['additionalInformation'], 'Rapid7\\InsightVM\\Api\\Model\\AdditionalInformation', 'json', $context));
        }
        if (\array_key_exists('appliesTo', $data)) {
            $object->setAppliesTo($data['appliesTo']);
        }
        if (\array_key_exists('estimate', $data)) {
            $object->setEstimate($data['estimate']);
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
        if (\array_key_exists('steps', $data)) {
            $object->setSteps($this->denormalizer->denormalize($data['steps'], 'Rapid7\\InsightVM\\Api\\Model\\Steps', 'json', $context));
        }
        if (\array_key_exists('summary', $data)) {
            $object->setSummary($this->denormalizer->denormalize($data['summary'], 'Rapid7\\InsightVM\\Api\\Model\\Summary', 'json', $context));
        }
        if (\array_key_exists('type', $data)) {
            $object->setType($data['type']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getAdditionalInformation()) {
            $data['additionalInformation'] = $this->normalizer->normalize($object->getAdditionalInformation(), 'json', $context);
        }
        if (null !== $object->getAppliesTo()) {
            $data['appliesTo'] = $object->getAppliesTo();
        }
        if (null !== $object->getEstimate()) {
            $data['estimate'] = $object->getEstimate();
        }
        if (null !== $object->getId()) {
            $data['id'] = $object->getId();
        }
        if (null !== $object->getSteps()) {
            $data['steps'] = $this->normalizer->normalize($object->getSteps(), 'json', $context);
        }
        if (null !== $object->getSummary()) {
            $data['summary'] = $this->normalizer->normalize($object->getSummary(), 'json', $context);
        }
        if (null !== $object->getType()) {
            $data['type'] = $object->getType();
        }
        return $data;
    }
}