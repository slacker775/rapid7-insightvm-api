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
class ScanTemplateWebSpiderPathsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Rapid7\\InsightVM\\Api\\Model\\ScanTemplateWebSpiderPaths';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Rapid7\\InsightVM\\Api\\Model\\ScanTemplateWebSpiderPaths';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Rapid7\InsightVM\Api\Model\ScanTemplateWebSpiderPaths();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('boostrap', $data)) {
            $object->setBoostrap($data['boostrap']);
        }
        if (\array_key_exists('excluded', $data)) {
            $object->setExcluded($data['excluded']);
        }
        if (\array_key_exists('honorRobotDirectives', $data)) {
            $object->setHonorRobotDirectives($data['honorRobotDirectives']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getBoostrap()) {
            $data['boostrap'] = $object->getBoostrap();
        }
        if (null !== $object->getExcluded()) {
            $data['excluded'] = $object->getExcluded();
        }
        if (null !== $object->getHonorRobotDirectives()) {
            $data['honorRobotDirectives'] = $object->getHonorRobotDirectives();
        }
        return $data;
    }
}