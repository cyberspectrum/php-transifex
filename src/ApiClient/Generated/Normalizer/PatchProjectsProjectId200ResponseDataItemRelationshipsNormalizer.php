<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Normalizer;

use ArrayObject;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\PatchProjectsProjectId200ResponseDataItemRelationships;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\PatchProjectsProjectId200ResponseDataItemRelationshipsLanguages;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\PatchProjectsProjectId200ResponseDataItemRelationshipsMaintainers;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\PatchProjectsProjectId200ResponseDataItemRelationshipsOrganization;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\PatchProjectsProjectId200ResponseDataItemRelationshipsResources;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\PatchProjectsProjectId200ResponseDataItemRelationshipsSourceLanguage;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\PatchProjectsProjectId200ResponseDataItemRelationshipsTeam;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Runtime\Normalizer\CheckArray;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Runtime\Normalizer\ValidatorTrait;
use Jane\Component\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

use function array_key_exists;
use function is_array;

class PatchProjectsProjectId200ResponseDataItemRelationshipsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return PatchProjectsProjectId200ResponseDataItemRelationships::class === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && PatchProjectsProjectId200ResponseDataItemRelationships::class === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new PatchProjectsProjectId200ResponseDataItemRelationships();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (array_key_exists('languages', $data)) {
            $object->setLanguages($this->denormalizer->denormalize($data['languages'], PatchProjectsProjectId200ResponseDataItemRelationshipsLanguages::class, 'json', $context));
        }
        if (array_key_exists('maintainers', $data)) {
            $object->setMaintainers($this->denormalizer->denormalize($data['maintainers'], PatchProjectsProjectId200ResponseDataItemRelationshipsMaintainers::class, 'json', $context));
        }
        if (array_key_exists('organization', $data)) {
            $object->setOrganization($this->denormalizer->denormalize($data['organization'], PatchProjectsProjectId200ResponseDataItemRelationshipsOrganization::class, 'json', $context));
        }
        if (array_key_exists('resources', $data)) {
            $object->setResources($this->denormalizer->denormalize($data['resources'], PatchProjectsProjectId200ResponseDataItemRelationshipsResources::class, 'json', $context));
        }
        if (array_key_exists('source_language', $data)) {
            $object->setSourceLanguage($this->denormalizer->denormalize($data['source_language'], PatchProjectsProjectId200ResponseDataItemRelationshipsSourceLanguage::class, 'json', $context));
        }
        if (array_key_exists('team', $data)) {
            $object->setTeam($this->denormalizer->denormalize($data['team'], PatchProjectsProjectId200ResponseDataItemRelationshipsTeam::class, 'json', $context));
        }

        return $object;
    }

    /**
     * @return array|ArrayObject|bool|float|int|string|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if (null !== $object->getLanguages()) {
            $data['languages'] = $this->normalizer->normalize($object->getLanguages(), 'json', $context);
        }
        if (null !== $object->getMaintainers()) {
            $data['maintainers'] = $this->normalizer->normalize($object->getMaintainers(), 'json', $context);
        }
        if (null !== $object->getOrganization()) {
            $data['organization'] = $this->normalizer->normalize($object->getOrganization(), 'json', $context);
        }
        if (null !== $object->getResources()) {
            $data['resources'] = $this->normalizer->normalize($object->getResources(), 'json', $context);
        }
        if (null !== $object->getSourceLanguage()) {
            $data['source_language'] = $this->normalizer->normalize($object->getSourceLanguage(), 'json', $context);
        }
        if (null !== $object->getTeam()) {
            $data['team'] = $this->normalizer->normalize($object->getTeam(), 'json', $context);
        }

        return $data;
    }
}
