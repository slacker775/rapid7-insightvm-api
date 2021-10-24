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
class JsonNodeNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Rapid7\\InsightVM\\Api\\Model\\JsonNode';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Rapid7\\InsightVM\\Api\\Model\\JsonNode';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Rapid7\InsightVM\Api\Model\JsonNode();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('array', $data)) {
            $object->setArray($data['array']);
        }
        if (\array_key_exists('bigDecimal', $data)) {
            $object->setBigDecimal($data['bigDecimal']);
        }
        if (\array_key_exists('bigInteger', $data)) {
            $object->setBigInteger($data['bigInteger']);
        }
        if (\array_key_exists('binary', $data)) {
            $object->setBinary($data['binary']);
        }
        if (\array_key_exists('boolean', $data)) {
            $object->setBoolean($data['boolean']);
        }
        if (\array_key_exists('containerNode', $data)) {
            $object->setContainerNode($data['containerNode']);
        }
        if (\array_key_exists('double', $data)) {
            $object->setDouble($data['double']);
        }
        if (\array_key_exists('float', $data)) {
            $object->setFloat($data['float']);
        }
        if (\array_key_exists('floatingPointNumber', $data)) {
            $object->setFloatingPointNumber($data['floatingPointNumber']);
        }
        if (\array_key_exists('int', $data)) {
            $object->setInt($data['int']);
        }
        if (\array_key_exists('integralNumber', $data)) {
            $object->setIntegralNumber($data['integralNumber']);
        }
        if (\array_key_exists('long', $data)) {
            $object->setLong($data['long']);
        }
        if (\array_key_exists('missingNode', $data)) {
            $object->setMissingNode($data['missingNode']);
        }
        if (\array_key_exists('nodeType', $data)) {
            $object->setNodeType($data['nodeType']);
        }
        if (\array_key_exists('null', $data)) {
            $object->setNull($data['null']);
        }
        if (\array_key_exists('number', $data)) {
            $object->setNumber($data['number']);
        }
        if (\array_key_exists('object', $data)) {
            $object->setObject($data['object']);
        }
        if (\array_key_exists('pojo', $data)) {
            $object->setPojo($data['pojo']);
        }
        if (\array_key_exists('short', $data)) {
            $object->setShort($data['short']);
        }
        if (\array_key_exists('textual', $data)) {
            $object->setTextual($data['textual']);
        }
        if (\array_key_exists('valueNode', $data)) {
            $object->setValueNode($data['valueNode']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getArray()) {
            $data['array'] = $object->getArray();
        }
        if (null !== $object->getBigDecimal()) {
            $data['bigDecimal'] = $object->getBigDecimal();
        }
        if (null !== $object->getBigInteger()) {
            $data['bigInteger'] = $object->getBigInteger();
        }
        if (null !== $object->getBinary()) {
            $data['binary'] = $object->getBinary();
        }
        if (null !== $object->getBoolean()) {
            $data['boolean'] = $object->getBoolean();
        }
        if (null !== $object->getContainerNode()) {
            $data['containerNode'] = $object->getContainerNode();
        }
        if (null !== $object->getDouble()) {
            $data['double'] = $object->getDouble();
        }
        if (null !== $object->getFloat()) {
            $data['float'] = $object->getFloat();
        }
        if (null !== $object->getFloatingPointNumber()) {
            $data['floatingPointNumber'] = $object->getFloatingPointNumber();
        }
        if (null !== $object->getInt()) {
            $data['int'] = $object->getInt();
        }
        if (null !== $object->getIntegralNumber()) {
            $data['integralNumber'] = $object->getIntegralNumber();
        }
        if (null !== $object->getLong()) {
            $data['long'] = $object->getLong();
        }
        if (null !== $object->getMissingNode()) {
            $data['missingNode'] = $object->getMissingNode();
        }
        if (null !== $object->getNodeType()) {
            $data['nodeType'] = $object->getNodeType();
        }
        if (null !== $object->getNull()) {
            $data['null'] = $object->getNull();
        }
        if (null !== $object->getNumber()) {
            $data['number'] = $object->getNumber();
        }
        if (null !== $object->getObject()) {
            $data['object'] = $object->getObject();
        }
        if (null !== $object->getPojo()) {
            $data['pojo'] = $object->getPojo();
        }
        if (null !== $object->getShort()) {
            $data['short'] = $object->getShort();
        }
        if (null !== $object->getTextual()) {
            $data['textual'] = $object->getTextual();
        }
        if (null !== $object->getValueNode()) {
            $data['valueNode'] = $object->getValueNode();
        }
        return $data;
    }
}