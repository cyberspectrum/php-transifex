<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Normalizer;

use ArrayObject;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\GetTeamMembershipsResponseIncludedItem;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\GetTeamMembershipsResponseIncludedItemattributes;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\GetTeamMembershipsResponseIncludedItemlinks;
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

class GetTeamMembershipsResponseIncludedItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return GetTeamMembershipsResponseIncludedItem::class === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && GetTeamMembershipsResponseIncludedItem::class === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new GetTeamMembershipsResponseIncludedItem();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (array_key_exists('id', $data)) {
            $object->setId($data['id']);
            unset($data['id']);
        }
        if (array_key_exists('type', $data)) {
            $object->setType($data['type']);
            unset($data['type']);
        }
        if (array_key_exists('attributes', $data)) {
            $object->setAttributes($this->denormalizer->denormalize($data['attributes'], GetTeamMembershipsResponseIncludedItemattributes::class, 'json', $context));
            unset($data['attributes']);
        }
        if (array_key_exists('links', $data)) {
            $object->setLinks($this->denormalizer->denormalize($data['links'], GetTeamMembershipsResponseIncludedItemlinks::class, 'json', $context));
            unset($data['links']);
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value;
            }
        }

        return $object;
    }

    /**
     * @return array|ArrayObject|bool|float|int|string|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if (null !== $object->getId()) {
            $data['id'] = $object->getId();
        }
        if (null !== $object->getType()) {
            $data['type'] = $object->getType();
        }
        if (null !== $object->getAttributes()) {
            $data['attributes'] = $this->normalizer->normalize($object->getAttributes(), 'json', $context);
        }
        if (null !== $object->getLinks()) {
            $data['links'] = $this->normalizer->normalize($object->getLinks(), 'json', $context);
        }
        foreach ($object as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value;
            }
        }

        return $data;
    }
}
