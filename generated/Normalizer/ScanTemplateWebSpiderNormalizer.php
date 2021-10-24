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
class ScanTemplateWebSpiderNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Rapid7\\InsightVM\\Api\\Model\\ScanTemplateWebSpider';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Rapid7\\InsightVM\\Api\\Model\\ScanTemplateWebSpider';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Rapid7\InsightVM\Api\Model\ScanTemplateWebSpider();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('dontScanMultiUseDevices', $data)) {
            $object->setDontScanMultiUseDevices($data['dontScanMultiUseDevices']);
        }
        if (\array_key_exists('includeQueryStrings', $data)) {
            $object->setIncludeQueryStrings($data['includeQueryStrings']);
        }
        if (\array_key_exists('paths', $data)) {
            $object->setPaths($this->denormalizer->denormalize($data['paths'], 'Rapid7\\InsightVM\\Api\\Model\\ScanTemplateWebSpiderPaths', 'json', $context));
        }
        if (\array_key_exists('patterns', $data)) {
            $object->setPatterns($this->denormalizer->denormalize($data['patterns'], 'Rapid7\\InsightVM\\Api\\Model\\ScanTemplateWebSpiderPatterns', 'json', $context));
        }
        if (\array_key_exists('performance', $data)) {
            $object->setPerformance($this->denormalizer->denormalize($data['performance'], 'Rapid7\\InsightVM\\Api\\Model\\ScanTemplateWebSpiderPerformance', 'json', $context));
        }
        if (\array_key_exists('testCommonUsernamesAndPasswords', $data)) {
            $object->setTestCommonUsernamesAndPasswords($data['testCommonUsernamesAndPasswords']);
        }
        if (\array_key_exists('testXssInSingleScan', $data)) {
            $object->setTestXssInSingleScan($data['testXssInSingleScan']);
        }
        if (\array_key_exists('userAgent', $data)) {
            $object->setUserAgent($data['userAgent']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getDontScanMultiUseDevices()) {
            $data['dontScanMultiUseDevices'] = $object->getDontScanMultiUseDevices();
        }
        if (null !== $object->getIncludeQueryStrings()) {
            $data['includeQueryStrings'] = $object->getIncludeQueryStrings();
        }
        if (null !== $object->getPaths()) {
            $data['paths'] = $this->normalizer->normalize($object->getPaths(), 'json', $context);
        }
        if (null !== $object->getPatterns()) {
            $data['patterns'] = $this->normalizer->normalize($object->getPatterns(), 'json', $context);
        }
        if (null !== $object->getPerformance()) {
            $data['performance'] = $this->normalizer->normalize($object->getPerformance(), 'json', $context);
        }
        if (null !== $object->getTestCommonUsernamesAndPasswords()) {
            $data['testCommonUsernamesAndPasswords'] = $object->getTestCommonUsernamesAndPasswords();
        }
        if (null !== $object->getTestXssInSingleScan()) {
            $data['testXssInSingleScan'] = $object->getTestXssInSingleScan();
        }
        if (null !== $object->getUserAgent()) {
            $data['userAgent'] = $object->getUserAgent();
        }
        return $data;
    }
}