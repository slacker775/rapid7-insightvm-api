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
class PolicyOverrideNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Rapid7\\InsightVM\\Api\\Model\\PolicyOverride';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Rapid7\\InsightVM\\Api\\Model\\PolicyOverride';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Rapid7\InsightVM\Api\Model\PolicyOverride();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('expires', $data)) {
            $object->setExpires($data['expires']);
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
        if (\array_key_exists('review', $data)) {
            $object->setReview($this->denormalizer->denormalize($data['review'], 'Rapid7\\InsightVM\\Api\\Model\\PolicyOverrideReviewer', 'json', $context));
        }
        if (\array_key_exists('scope', $data)) {
            $object->setScope($this->denormalizer->denormalize($data['scope'], 'Rapid7\\InsightVM\\Api\\Model\\PolicyOverrideScope', 'json', $context));
        }
        if (\array_key_exists('state', $data)) {
            $object->setState($data['state']);
        }
        if (\array_key_exists('submit', $data)) {
            $object->setSubmit($this->denormalizer->denormalize($data['submit'], 'Rapid7\\InsightVM\\Api\\Model\\PolicyOverrideSubmitter', 'json', $context));
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getExpires()) {
            $data['expires'] = $object->getExpires();
        }
        if (null !== $object->getLinks()) {
            $values = array();
            foreach ($object->getLinks() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['links'] = $values;
        }
        if (null !== $object->getReview()) {
            $data['review'] = $this->normalizer->normalize($object->getReview(), 'json', $context);
        }
        $data['scope'] = $this->normalizer->normalize($object->getScope(), 'json', $context);
        $data['state'] = $object->getState();
        $data['submit'] = $this->normalizer->normalize($object->getSubmit(), 'json', $context);
        return $data;
    }
}