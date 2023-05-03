<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Normalizer;

use ArrayObject;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\PatchResourcesResourceIdRequestBodyDataAttributes;
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

class PatchResourcesResourceIdRequestBodyDataAttributesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return PatchResourcesResourceIdRequestBodyDataAttributes::class === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && PatchResourcesResourceIdRequestBodyDataAttributes::class === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new PatchResourcesResourceIdRequestBodyDataAttributes();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (array_key_exists('accept_translations', $data)) {
            $object->setAcceptTranslations($data['accept_translations']);
        }
        if (array_key_exists('categories', $data)) {
            $values = [];
            foreach ($data['categories'] as $value) {
                $values[] = $value;
            }
            $object->setCategories($values);
        }
        if (array_key_exists('mp4_url', $data) && null !== $data['mp4_url']) {
            $object->setMp4Url($data['mp4_url']);
        } elseif (array_key_exists('mp4_url', $data) && null === $data['mp4_url']) {
            $object->setMp4Url(null);
        }
        if (array_key_exists('name', $data)) {
            $object->setName($data['name']);
        }
        if (array_key_exists('ogg_url', $data) && null !== $data['ogg_url']) {
            $object->setOggUrl($data['ogg_url']);
        } elseif (array_key_exists('ogg_url', $data) && null === $data['ogg_url']) {
            $object->setOggUrl(null);
        }
        if (array_key_exists('priority', $data)) {
            $object->setPriority($data['priority']);
        }
        if (array_key_exists('webm_url', $data) && null !== $data['webm_url']) {
            $object->setWebmUrl($data['webm_url']);
        } elseif (array_key_exists('webm_url', $data) && null === $data['webm_url']) {
            $object->setWebmUrl(null);
        }
        if (array_key_exists('youtube_url', $data) && null !== $data['youtube_url']) {
            $object->setYoutubeUrl($data['youtube_url']);
        } elseif (array_key_exists('youtube_url', $data) && null === $data['youtube_url']) {
            $object->setYoutubeUrl(null);
        }

        return $object;
    }

    /**
     * @return array|ArrayObject|bool|float|int|string|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if ($object->isInitialized('acceptTranslations') && null !== $object->getAcceptTranslations()) {
            $data['accept_translations'] = $object->getAcceptTranslations();
        }
        if ($object->isInitialized('categories') && null !== $object->getCategories()) {
            $values = [];
            foreach ($object->getCategories() as $value) {
                $values[] = $value;
            }
            $data['categories'] = $values;
        }
        if ($object->isInitialized('mp4Url') && null !== $object->getMp4Url()) {
            $data['mp4_url'] = $object->getMp4Url();
        }
        if ($object->isInitialized('name') && null !== $object->getName()) {
            $data['name'] = $object->getName();
        }
        if ($object->isInitialized('oggUrl') && null !== $object->getOggUrl()) {
            $data['ogg_url'] = $object->getOggUrl();
        }
        if ($object->isInitialized('priority') && null !== $object->getPriority()) {
            $data['priority'] = $object->getPriority();
        }
        if ($object->isInitialized('webmUrl') && null !== $object->getWebmUrl()) {
            $data['webm_url'] = $object->getWebmUrl();
        }
        if ($object->isInitialized('youtubeUrl') && null !== $object->getYoutubeUrl()) {
            $data['youtube_url'] = $object->getYoutubeUrl();
        }

        return $data;
    }
}
