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
class AssetPolicyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Rapid7\\InsightVM\\Api\\Model\\AssetPolicy';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Rapid7\\InsightVM\\Api\\Model\\AssetPolicy';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Rapid7\InsightVM\Api\Model\AssetPolicy();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('benchmarkName', $data)) {
            $object->setBenchmarkName($data['benchmarkName']);
        }
        if (\array_key_exists('benchmarkVersion', $data)) {
            $object->setBenchmarkVersion($data['benchmarkVersion']);
        }
        if (\array_key_exists('category', $data)) {
            $object->setCategory($data['category']);
        }
        if (\array_key_exists('description', $data)) {
            $object->setDescription($data['description']);
        }
        if (\array_key_exists('failedAssetsCount', $data)) {
            $object->setFailedAssetsCount($data['failedAssetsCount']);
        }
        if (\array_key_exists('failedRulesCount', $data)) {
            $object->setFailedRulesCount($data['failedRulesCount']);
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (\array_key_exists('isCustom', $data)) {
            $object->setIsCustom($data['isCustom']);
        }
        if (\array_key_exists('links', $data)) {
            $values = array();
            foreach ($data['links'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Rapid7\\InsightVM\\Api\\Model\\Link', 'json', $context);
            }
            $object->setLinks($values);
        }
        if (\array_key_exists('notApplicableAssetsCount', $data)) {
            $object->setNotApplicableAssetsCount($data['notApplicableAssetsCount']);
        }
        if (\array_key_exists('notApplicableRulesCount', $data)) {
            $object->setNotApplicableRulesCount($data['notApplicableRulesCount']);
        }
        if (\array_key_exists('passedAssetsCount', $data)) {
            $object->setPassedAssetsCount($data['passedAssetsCount']);
        }
        if (\array_key_exists('passedRulesCount', $data)) {
            $object->setPassedRulesCount($data['passedRulesCount']);
        }
        if (\array_key_exists('policyName', $data)) {
            $object->setPolicyName($data['policyName']);
        }
        if (\array_key_exists('ruleCompliance', $data)) {
            $object->setRuleCompliance($data['ruleCompliance']);
        }
        if (\array_key_exists('ruleComplianceDelta', $data)) {
            $object->setRuleComplianceDelta($data['ruleComplianceDelta']);
        }
        if (\array_key_exists('scope', $data)) {
            $object->setScope($data['scope']);
        }
        if (\array_key_exists('status', $data)) {
            $object->setStatus($data['status']);
        }
        if (\array_key_exists('surrogateId', $data)) {
            $object->setSurrogateId($data['surrogateId']);
        }
        if (\array_key_exists('title', $data)) {
            $object->setTitle($data['title']);
        }
        if (\array_key_exists('unscoredRules', $data)) {
            $object->setUnscoredRules($data['unscoredRules']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getBenchmarkName()) {
            $data['benchmarkName'] = $object->getBenchmarkName();
        }
        if (null !== $object->getBenchmarkVersion()) {
            $data['benchmarkVersion'] = $object->getBenchmarkVersion();
        }
        if (null !== $object->getCategory()) {
            $data['category'] = $object->getCategory();
        }
        if (null !== $object->getDescription()) {
            $data['description'] = $object->getDescription();
        }
        if (null !== $object->getFailedAssetsCount()) {
            $data['failedAssetsCount'] = $object->getFailedAssetsCount();
        }
        if (null !== $object->getFailedRulesCount()) {
            $data['failedRulesCount'] = $object->getFailedRulesCount();
        }
        if (null !== $object->getId()) {
            $data['id'] = $object->getId();
        }
        if (null !== $object->getIsCustom()) {
            $data['isCustom'] = $object->getIsCustom();
        }
        if (null !== $object->getNotApplicableAssetsCount()) {
            $data['notApplicableAssetsCount'] = $object->getNotApplicableAssetsCount();
        }
        if (null !== $object->getNotApplicableRulesCount()) {
            $data['notApplicableRulesCount'] = $object->getNotApplicableRulesCount();
        }
        if (null !== $object->getPassedAssetsCount()) {
            $data['passedAssetsCount'] = $object->getPassedAssetsCount();
        }
        if (null !== $object->getPassedRulesCount()) {
            $data['passedRulesCount'] = $object->getPassedRulesCount();
        }
        if (null !== $object->getPolicyName()) {
            $data['policyName'] = $object->getPolicyName();
        }
        if (null !== $object->getRuleCompliance()) {
            $data['ruleCompliance'] = $object->getRuleCompliance();
        }
        if (null !== $object->getRuleComplianceDelta()) {
            $data['ruleComplianceDelta'] = $object->getRuleComplianceDelta();
        }
        if (null !== $object->getScope()) {
            $data['scope'] = $object->getScope();
        }
        if (null !== $object->getStatus()) {
            $data['status'] = $object->getStatus();
        }
        if (null !== $object->getSurrogateId()) {
            $data['surrogateId'] = $object->getSurrogateId();
        }
        if (null !== $object->getTitle()) {
            $data['title'] = $object->getTitle();
        }
        if (null !== $object->getUnscoredRules()) {
            $data['unscoredRules'] = $object->getUnscoredRules();
        }
        return $data;
    }
}