<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Normalizer;

use ArrayObject;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\PatchResourceTranslationsRequestBodyDataAttributes;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\PatchResourceTranslationsRequestBodyDataAttributesStrings;
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

class PatchResourceTranslationsRequestBodyDataAttributesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return PatchResourceTranslationsRequestBodyDataAttributes::class === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && PatchResourceTranslationsRequestBodyDataAttributes::class === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new PatchResourceTranslationsRequestBodyDataAttributes();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (array_key_exists('proofread', $data)) {
            $object->setProofread($data['proofread']);
        }
        if (array_key_exists('reviewed', $data)) {
            $object->setReviewed($data['reviewed']);
        }
        if (array_key_exists('strings', $data) && null !== $data['strings']) {
            $object->setStrings($this->denormalizer->denormalize($data['strings'], PatchResourceTranslationsRequestBodyDataAttributesStrings::class, 'json', $context));
        } elseif (array_key_exists('strings', $data) && null === $data['strings']) {
            $object->setStrings(null);
        }

        return $object;
    }

    /**
     * @return array|ArrayObject|bool|float|int|string|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if ($object->isInitialized('proofread') && null !== $object->getProofread()) {
            $data['proofread'] = $object->getProofread();
        }
        if ($object->isInitialized('reviewed') && null !== $object->getReviewed()) {
            $data['reviewed'] = $object->getReviewed();
        }
        if ($object->isInitialized('strings') && null !== $object->getStrings()) {
            $data['strings'] = $this->normalizer->normalize($object->getStrings(), 'json', $context);
        }

        return $data;
    }
}
