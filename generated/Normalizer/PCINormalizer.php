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
class PCINormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Rapid7\\InsightVM\\Api\\Model\\PCI';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Rapid7\\InsightVM\\Api\\Model\\PCI';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Rapid7\InsightVM\Api\Model\PCI();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('adjustedCVSSScore', $data)) {
            $object->setAdjustedCVSSScore($data['adjustedCVSSScore']);
        }
        if (\array_key_exists('adjustedSeverityScore', $data)) {
            $object->setAdjustedSeverityScore($data['adjustedSeverityScore']);
        }
        if (\array_key_exists('fail', $data)) {
            $object->setFail($data['fail']);
        }
        if (\array_key_exists('specialNotes', $data)) {
            $object->setSpecialNotes($data['specialNotes']);
        }
        if (\array_key_exists('status', $data)) {
            $object->setStatus($data['status']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getAdjustedCVSSScore()) {
            $data['adjustedCVSSScore'] = $object->getAdjustedCVSSScore();
        }
        if (null !== $object->getAdjustedSeverityScore()) {
            $data['adjustedSeverityScore'] = $object->getAdjustedSeverityScore();
        }
        if (null !== $object->getFail()) {
            $data['fail'] = $object->getFail();
        }
        if (null !== $object->getSpecialNotes()) {
            $data['specialNotes'] = $object->getSpecialNotes();
        }
        if (null !== $object->getStatus()) {
            $data['status'] = $object->getStatus();
        }
        return $data;
    }
}