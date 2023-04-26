<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Normalizer;

use ArrayObject;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\PatchResourcesResourceIdRequestBodyData;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\PatchResourcesResourceIdRequestBodyDataAttributes;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\PatchResourcesResourceIdRequestBodyDataRelationships;
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

class PatchResourcesResourceIdRequestBodyDataNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return PatchResourcesResourceIdRequestBodyData::class === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && PatchResourcesResourceIdRequestBodyData::class === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new PatchResourcesResourceIdRequestBodyData();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (array_key_exists('attributes', $data)) {
            $object->setAttributes($this->denormalizer->denormalize($data['attributes'], PatchResourcesResourceIdRequestBodyDataAttributes::class, 'json', $context));
        }
        if (array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (array_key_exists('relationships', $data)) {
            $object->setRelationships($this->denormalizer->denormalize($data['relationships'], PatchResourcesResourceIdRequestBodyDataRelationships::class, 'json', $context));
        }
        if (array_key_exists('type', $data)) {
            $object->setType($data['type']);
        }

        return $object;
    }

    /**
     * @return array|ArrayObject|bool|float|int|string|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if ($object->isInitialized('attributes') && null !== $object->getAttributes()) {
            $data['attributes'] = $this->normalizer->normalize($object->getAttributes(), 'json', $context);
        }
        if (null !== $object->getId()) {
            $data['id'] = $object->getId();
        }
        if ($object->isInitialized('relationships') && null !== $object->getRelationships()) {
            $data['relationships'] = $this->normalizer->normalize($object->getRelationships(), 'json', $context);
        }
        if (null !== $object->getType()) {
            $data['type'] = $object->getType();
        }

        return $data;
    }
}
