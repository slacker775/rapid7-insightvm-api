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
class LicenseReportingNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Rapid7\\InsightVM\\Api\\Model\\LicenseReporting';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Rapid7\\InsightVM\\Api\\Model\\LicenseReporting';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Rapid7\InsightVM\Api\Model\LicenseReporting();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('advanced', $data)) {
            $object->setAdvanced($data['advanced']);
        }
        if (\array_key_exists('customizableCSVExport', $data)) {
            $object->setCustomizableCSVExport($data['customizableCSVExport']);
        }
        if (\array_key_exists('pci', $data)) {
            $object->setPci($data['pci']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getAdvanced()) {
            $data['advanced'] = $object->getAdvanced();
        }
        if (null !== $object->getCustomizableCSVExport()) {
            $data['customizableCSVExport'] = $object->getCustomizableCSVExport();
        }
        if (null !== $object->getPci()) {
            $data['pci'] = $object->getPci();
        }
        return $data;
    }
}