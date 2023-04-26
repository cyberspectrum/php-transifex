<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Normalizer;

use ArrayObject;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\PatchResourceStringsRequestBodyDataAttributes;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\PatchResourceStringsRequestBodyDataAttributesStrings;
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

class PatchResourceStringsRequestBodyDataAttributesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return PatchResourceStringsRequestBodyDataAttributes::class === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && PatchResourceStringsRequestBodyDataAttributes::class === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new PatchResourceStringsRequestBodyDataAttributes();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (array_key_exists('character_limit', $data) && null !== $data['character_limit']) {
            $object->setCharacterLimit($data['character_limit']);
        } elseif (array_key_exists('character_limit', $data) && null === $data['character_limit']) {
            $object->setCharacterLimit(null);
        }
        if (array_key_exists('instructions', $data) && null !== $data['instructions']) {
            $object->setInstructions($data['instructions']);
        } elseif (array_key_exists('instructions', $data) && null === $data['instructions']) {
            $object->setInstructions(null);
        }
        if (array_key_exists('strings', $data)) {
            $object->setStrings($this->denormalizer->denormalize($data['strings'], PatchResourceStringsRequestBodyDataAttributesStrings::class, 'json', $context));
        }
        if (array_key_exists('tags', $data)) {
            $values = [];
            foreach ($data['tags'] as $value) {
                $values[] = $value;
            }
            $object->setTags($values);
        }

        return $object;
    }

    /**
     * @return array|ArrayObject|bool|float|int|string|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if ($object->isInitialized('characterLimit') && null !== $object->getCharacterLimit()) {
            $data['character_limit'] = $object->getCharacterLimit();
        }
        if ($object->isInitialized('instructions') && null !== $object->getInstructions()) {
            $data['instructions'] = $object->getInstructions();
        }
        if ($object->isInitialized('strings') && null !== $object->getStrings()) {
            $data['strings'] = $this->normalizer->normalize($object->getStrings(), 'json', $context);
        }
        if ($object->isInitialized('tags') && null !== $object->getTags()) {
            $values = [];
            foreach ($object->getTags() as $value) {
                $values[] = $value;
            }
            $data['tags'] = $values;
        }

        return $data;
    }
}
