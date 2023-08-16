<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Normalizer;

use ArrayObject;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\PostTeamMembershipsRequestBodyDataRelationships;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\PostTeamMembershipsRequestBodyDataRelationshipsLanguage;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\PostTeamMembershipsRequestBodyDataRelationshipsUser;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\RequestBodyDataRelationshipsTeam;
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

class PostTeamMembershipsRequestBodyDataRelationshipsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return PostTeamMembershipsRequestBodyDataRelationships::class === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && PostTeamMembershipsRequestBodyDataRelationships::class === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new PostTeamMembershipsRequestBodyDataRelationships();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (array_key_exists('language', $data)) {
            $object->setLanguage($this->denormalizer->denormalize($data['language'], PostTeamMembershipsRequestBodyDataRelationshipsLanguage::class, 'json', $context));
        }
        if (array_key_exists('team', $data)) {
            $object->setTeam($this->denormalizer->denormalize($data['team'], RequestBodyDataRelationshipsTeam::class, 'json', $context));
        }
        if (array_key_exists('user', $data)) {
            $object->setUser($this->denormalizer->denormalize($data['user'], PostTeamMembershipsRequestBodyDataRelationshipsUser::class, 'json', $context));
        }

        return $object;
    }

    /**
     * @return array|ArrayObject|bool|float|int|string|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if (null !== $object->getLanguage()) {
            $data['language'] = $this->normalizer->normalize($object->getLanguage(), 'json', $context);
        }
        if (null !== $object->getTeam()) {
            $data['team'] = $this->normalizer->normalize($object->getTeam(), 'json', $context);
        }
        if (null !== $object->getUser()) {
            $data['user'] = $this->normalizer->normalize($object->getUser(), 'json', $context);
        }

        return $data;
    }

    public function getSupportedTypes(string $format = null): array
    {
        return [PostTeamMembershipsRequestBodyDataRelationships::class => false];
    }
}
