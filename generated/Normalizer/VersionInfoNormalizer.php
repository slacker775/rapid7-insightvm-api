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
class VersionInfoNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Rapid7\\InsightVM\\Api\\Model\\VersionInfo';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Rapid7\\InsightVM\\Api\\Model\\VersionInfo';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Rapid7\InsightVM\Api\Model\VersionInfo();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('build', $data)) {
            $object->setBuild($data['build']);
        }
        if (\array_key_exists('changeset', $data)) {
            $object->setChangeset($data['changeset']);
        }
        if (\array_key_exists('platform', $data)) {
            $object->setPlatform($data['platform']);
        }
        if (\array_key_exists('semantic', $data)) {
            $object->setSemantic($data['semantic']);
        }
        if (\array_key_exists('update', $data)) {
            $object->setUpdate($this->denormalizer->denormalize($data['update'], 'Rapid7\\InsightVM\\Api\\Model\\UpdateInfo', 'json', $context));
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getBuild()) {
            $data['build'] = $object->getBuild();
        }
        if (null !== $object->getChangeset()) {
            $data['changeset'] = $object->getChangeset();
        }
        if (null !== $object->getPlatform()) {
            $data['platform'] = $object->getPlatform();
        }
        if (null !== $object->getSemantic()) {
            $data['semantic'] = $object->getSemantic();
        }
        if (null !== $object->getUpdate()) {
            $data['update'] = $this->normalizer->normalize($object->getUpdate(), 'json', $context);
        }
        return $data;
    }
}