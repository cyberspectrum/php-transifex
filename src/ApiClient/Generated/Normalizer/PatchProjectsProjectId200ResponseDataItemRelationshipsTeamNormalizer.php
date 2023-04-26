<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Normalizer;

use ArrayObject;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\PatchProjectsProjectId200ResponseDataItemRelationshipsTeam;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\PatchProjectsProjectId200ResponseDataItemRelationshipsTeamData;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\PatchProjectsProjectId200ResponseDataItemRelationshipsTeamLinks;
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

class PatchProjectsProjectId200ResponseDataItemRelationshipsTeamNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return PatchProjectsProjectId200ResponseDataItemRelationshipsTeam::class === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && PatchProjectsProjectId200ResponseDataItemRelationshipsTeam::class === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new PatchProjectsProjectId200ResponseDataItemRelationshipsTeam();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (array_key_exists('data', $data)) {
            $object->setData($this->denormalizer->denormalize($data['data'], PatchProjectsProjectId200ResponseDataItemRelationshipsTeamData::class, 'json', $context));
        }
        if (array_key_exists('links', $data)) {
            $object->setLinks($this->denormalizer->denormalize($data['links'], PatchProjectsProjectId200ResponseDataItemRelationshipsTeamLinks::class, 'json', $context));
        }

        return $object;
    }

    /**
     * @return array|ArrayObject|bool|float|int|string|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if (null !== $object->getData()) {
            $data['data'] = $this->normalizer->normalize($object->getData(), 'json', $context);
        }
        if (null !== $object->getLinks()) {
            $data['links'] = $this->normalizer->normalize($object->getLinks(), 'json', $context);
        }

        return $data;
    }
}
