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
class ReportFrequencyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Rapid7\\InsightVM\\Api\\Model\\ReportFrequency';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Rapid7\\InsightVM\\Api\\Model\\ReportFrequency';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Rapid7\InsightVM\Api\Model\ReportFrequency();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('nextRuntimes', $data)) {
            $values = array();
            foreach ($data['nextRuntimes'] as $value) {
                $values[] = $value;
            }
            $object->setNextRuntimes($values);
        }
        if (\array_key_exists('repeat', $data)) {
            $object->setRepeat($this->denormalizer->denormalize($data['repeat'], 'Rapid7\\InsightVM\\Api\\Model\\RepeatSchedule', 'json', $context));
        }
        if (\array_key_exists('start', $data)) {
            $object->setStart($data['start']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['repeat'] = $this->normalizer->normalize($object->getRepeat(), 'json', $context);
        $data['start'] = $object->getStart();
        return $data;
    }
}