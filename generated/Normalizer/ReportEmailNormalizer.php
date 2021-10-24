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
class ReportEmailNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Rapid7\\InsightVM\\Api\\Model\\ReportEmail';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Rapid7\\InsightVM\\Api\\Model\\ReportEmail';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Rapid7\InsightVM\Api\Model\ReportEmail();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('access', $data)) {
            $object->setAccess($data['access']);
        }
        if (\array_key_exists('additional', $data)) {
            $object->setAdditional($data['additional']);
        }
        if (\array_key_exists('additionalRecipients', $data)) {
            $values = array();
            foreach ($data['additionalRecipients'] as $value) {
                $values[] = $value;
            }
            $object->setAdditionalRecipients($values);
        }
        if (\array_key_exists('assetAccess', $data)) {
            $object->setAssetAccess($data['assetAccess']);
        }
        if (\array_key_exists('owner', $data)) {
            $object->setOwner($data['owner']);
        }
        if (\array_key_exists('smtp', $data)) {
            $object->setSmtp($this->denormalizer->denormalize($data['smtp'], 'Rapid7\\InsightVM\\Api\\Model\\ReportEmailSmtp', 'json', $context));
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getAccess()) {
            $data['access'] = $object->getAccess();
        }
        if (null !== $object->getAdditional()) {
            $data['additional'] = $object->getAdditional();
        }
        if (null !== $object->getAdditionalRecipients()) {
            $values = array();
            foreach ($object->getAdditionalRecipients() as $value) {
                $values[] = $value;
            }
            $data['additionalRecipients'] = $values;
        }
        if (null !== $object->getAssetAccess()) {
            $data['assetAccess'] = $object->getAssetAccess();
        }
        if (null !== $object->getOwner()) {
            $data['owner'] = $object->getOwner();
        }
        if (null !== $object->getSmtp()) {
            $data['smtp'] = $this->normalizer->normalize($object->getSmtp(), 'json', $context);
        }
        return $data;
    }
}