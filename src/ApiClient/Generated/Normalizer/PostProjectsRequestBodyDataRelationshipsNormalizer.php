<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Normalizer;

use ArrayObject;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\PostProjectsRequestBodyDataRelationships;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\PostProjectsRequestBodyDataRelationshipsOrganization;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\PostProjectsRequestBodyDataRelationshipsSourceLanguage;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\PostProjectsRequestBodyDataRelationshipsTeam;
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

class PostProjectsRequestBodyDataRelationshipsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return PostProjectsRequestBodyDataRelationships::class === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && PostProjectsRequestBodyDataRelationships::class === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new PostProjectsRequestBodyDataRelationships();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (array_key_exists('organization', $data)) {
            $object->setOrganization($this->denormalizer->denormalize($data['organization'], PostProjectsRequestBodyDataRelationshipsOrganization::class, 'json', $context));
        }
        if (array_key_exists('source_language', $data)) {
            $object->setSourceLanguage($this->denormalizer->denormalize($data['source_language'], PostProjectsRequestBodyDataRelationshipsSourceLanguage::class, 'json', $context));
        }
        if (array_key_exists('team', $data)) {
            $object->setTeam($this->denormalizer->denormalize($data['team'], PostProjectsRequestBodyDataRelationshipsTeam::class, 'json', $context));
        }

        return $object;
    }

    /**
     * @return array|ArrayObject|bool|float|int|string|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if (null !== $object->getOrganization()) {
            $data['organization'] = $this->normalizer->normalize($object->getOrganization(), 'json', $context);
        }
        if (null !== $object->getSourceLanguage()) {
            $data['source_language'] = $this->normalizer->normalize($object->getSourceLanguage(), 'json', $context);
        }
        if ($object->isInitialized('team') && null !== $object->getTeam()) {
            $data['team'] = $this->normalizer->normalize($object->getTeam(), 'json', $context);
        }

        return $data;
    }
}
