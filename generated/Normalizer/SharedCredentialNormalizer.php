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
class SharedCredentialNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Rapid7\\InsightVM\\Api\\Model\\SharedCredential';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Rapid7\\InsightVM\\Api\\Model\\SharedCredential';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Rapid7\InsightVM\Api\Model\SharedCredential();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('account', $data)) {
            $object->setAccount($this->denormalizer->denormalize($data['account'], 'Rapid7\\InsightVM\\Api\\Model\\SharedCredentialAccount', 'json', $context));
        }
        if (\array_key_exists('description', $data)) {
            $object->setDescription($data['description']);
        }
        if (\array_key_exists('hostRestriction', $data)) {
            $object->setHostRestriction($data['hostRestriction']);
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
        }
        if (\array_key_exists('portRestriction', $data)) {
            $object->setPortRestriction($data['portRestriction']);
        }
        if (\array_key_exists('siteAssignment', $data)) {
            $object->setSiteAssignment($data['siteAssignment']);
        }
        if (\array_key_exists('sites', $data)) {
            $values = array();
            foreach ($data['sites'] as $value) {
                $values[] = $value;
            }
            $object->setSites($values);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['account'] = $this->normalizer->normalize($object->getAccount(), 'json', $context);
        if (null !== $object->getDescription()) {
            $data['description'] = $object->getDescription();
        }
        if (null !== $object->getHostRestriction()) {
            $data['hostRestriction'] = $object->getHostRestriction();
        }
        if (null !== $object->getId()) {
            $data['id'] = $object->getId();
        }
        $data['name'] = $object->getName();
        if (null !== $object->getPortRestriction()) {
            $data['portRestriction'] = $object->getPortRestriction();
        }
        $data['siteAssignment'] = $object->getSiteAssignment();
        if (null !== $object->getSites()) {
            $values = array();
            foreach ($object->getSites() as $value) {
                $values[] = $value;
            }
            $data['sites'] = $values;
        }
        return $data;
    }
}