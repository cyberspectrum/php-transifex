<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Normalizer;

use ArrayObject;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\ResourcesAttributesI18nOptions;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\ResourcesResponseAttributes;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Runtime\Normalizer\CheckArray;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Runtime\Normalizer\ValidatorTrait;
use DateTime;
use Jane\Component\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

use function array_key_exists;
use function is_array;
use function is_int;

class ResourcesResponseAttributesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return ResourcesResponseAttributes::class === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && ResourcesResponseAttributes::class === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new ResourcesResponseAttributes();
        if (array_key_exists('i18n_version', $data) && is_int($data['i18n_version'])) {
            $data['i18n_version'] = (float) $data['i18n_version'];
        }
        if (array_key_exists('string_count', $data) && is_int($data['string_count'])) {
            $data['string_count'] = (float) $data['string_count'];
        }
        if (array_key_exists('word_count', $data) && is_int($data['word_count'])) {
            $data['word_count'] = (float) $data['word_count'];
        }
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
        if (array_key_exists('datetime_created', $data)) {
            $object->setDatetimeCreated(DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['datetime_created']));
        }
        if (array_key_exists('datetime_modified', $data)) {
            $object->setDatetimeModified(DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['datetime_modified']));
        }
        if (array_key_exists('i18n_options', $data) && null !== $data['i18n_options']) {
            $object->setI18nOptions($this->denormalizer->denormalize($data['i18n_options'], ResourcesAttributesI18nOptions::class, 'json', $context));
        } elseif (array_key_exists('i18n_options', $data) && null === $data['i18n_options']) {
            $object->setI18nOptions(null);
        }
        if (array_key_exists('i18n_version', $data)) {
            $object->setI18nVersion($data['i18n_version']);
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
        if (array_key_exists('slug', $data)) {
            $object->setSlug($data['slug']);
        }
        if (array_key_exists('string_count', $data)) {
            $object->setStringCount($data['string_count']);
        }
        if (array_key_exists('webm_url', $data) && null !== $data['webm_url']) {
            $object->setWebmUrl($data['webm_url']);
        } elseif (array_key_exists('webm_url', $data) && null === $data['webm_url']) {
            $object->setWebmUrl(null);
        }
        if (array_key_exists('word_count', $data)) {
            $object->setWordCount($data['word_count']);
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
        if (null !== $object->getAcceptTranslations()) {
            $data['accept_translations'] = $object->getAcceptTranslations();
        }
        if (null !== $object->getCategories()) {
            $values = [];
            foreach ($object->getCategories() as $value) {
                $values[] = $value;
            }
            $data['categories'] = $values;
        }
        if (null !== $object->getDatetimeCreated()) {
            $data['datetime_created'] = $object->getDatetimeCreated()->format('Y-m-d\\TH:i:sP');
        }
        if (null !== $object->getDatetimeModified()) {
            $data['datetime_modified'] = $object->getDatetimeModified()->format('Y-m-d\\TH:i:sP');
        }
        if (null !== $object->getI18nOptions()) {
            $data['i18n_options'] = $this->normalizer->normalize($object->getI18nOptions(), 'json', $context);
        }
        if (null !== $object->getI18nVersion()) {
            $data['i18n_version'] = $object->getI18nVersion();
        }
        if (null !== $object->getMp4Url()) {
            $data['mp4_url'] = $object->getMp4Url();
        }
        if (null !== $object->getName()) {
            $data['name'] = $object->getName();
        }
        if (null !== $object->getOggUrl()) {
            $data['ogg_url'] = $object->getOggUrl();
        }
        if (null !== $object->getPriority()) {
            $data['priority'] = $object->getPriority();
        }
        if (null !== $object->getSlug()) {
            $data['slug'] = $object->getSlug();
        }
        if (null !== $object->getStringCount()) {
            $data['string_count'] = $object->getStringCount();
        }
        if (null !== $object->getWebmUrl()) {
            $data['webm_url'] = $object->getWebmUrl();
        }
        if (null !== $object->getWordCount()) {
            $data['word_count'] = $object->getWordCount();
        }
        if (null !== $object->getYoutubeUrl()) {
            $data['youtube_url'] = $object->getYoutubeUrl();
        }

        return $data;
    }
}
