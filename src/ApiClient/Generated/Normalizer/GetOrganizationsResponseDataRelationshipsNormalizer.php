<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Normalizer;

use ArrayObject;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\GetOrganizationsResponseDataRelationships;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\GetOrganizationsResponseDataRelationshipsProjects;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\GetOrganizationsResponseDataRelationshipsTeams;
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

class GetOrganizationsResponseDataRelationshipsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return GetOrganizationsResponseDataRelationships::class === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && GetOrganizationsResponseDataRelationships::class === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new GetOrganizationsResponseDataRelationships();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (array_key_exists('projects', $data)) {
            $object->setProjects($this->denormalizer->denormalize($data['projects'], GetOrganizationsResponseDataRelationshipsProjects::class, 'json', $context));
        }
        if (array_key_exists('teams', $data)) {
            $object->setTeams($this->denormalizer->denormalize($data['teams'], GetOrganizationsResponseDataRelationshipsTeams::class, 'json', $context));
        }

        return $object;
    }

    /**
     * @return array|ArrayObject|bool|float|int|string|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if ($object->isInitialized('projects') && null !== $object->getProjects()) {
            $data['projects'] = $this->normalizer->normalize($object->getProjects(), 'json', $context);
        }
        if ($object->isInitialized('teams') && null !== $object->getTeams()) {
            $data['teams'] = $this->normalizer->normalize($object->getTeams(), 'json', $context);
        }

        return $data;
    }
}
