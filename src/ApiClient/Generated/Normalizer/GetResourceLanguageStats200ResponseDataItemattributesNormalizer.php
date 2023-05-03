<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Normalizer;

use ArrayObject;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\GetResourceLanguageStats200ResponseDataItemattributes;
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

class GetResourceLanguageStats200ResponseDataItemattributesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return GetResourceLanguageStats200ResponseDataItemattributes::class === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && GetResourceLanguageStats200ResponseDataItemattributes::class === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new GetResourceLanguageStats200ResponseDataItemattributes();
        if (array_key_exists('proofread_strings', $data) && is_int($data['proofread_strings'])) {
            $data['proofread_strings'] = (float) $data['proofread_strings'];
        }
        if (array_key_exists('proofread_words', $data) && is_int($data['proofread_words'])) {
            $data['proofread_words'] = (float) $data['proofread_words'];
        }
        if (array_key_exists('reviewed_strings', $data) && is_int($data['reviewed_strings'])) {
            $data['reviewed_strings'] = (float) $data['reviewed_strings'];
        }
        if (array_key_exists('reviewed_words', $data) && is_int($data['reviewed_words'])) {
            $data['reviewed_words'] = (float) $data['reviewed_words'];
        }
        if (array_key_exists('total_strings', $data) && is_int($data['total_strings'])) {
            $data['total_strings'] = (float) $data['total_strings'];
        }
        if (array_key_exists('total_words', $data) && is_int($data['total_words'])) {
            $data['total_words'] = (float) $data['total_words'];
        }
        if (array_key_exists('translated_strings', $data) && is_int($data['translated_strings'])) {
            $data['translated_strings'] = (float) $data['translated_strings'];
        }
        if (array_key_exists('translated_words', $data) && is_int($data['translated_words'])) {
            $data['translated_words'] = (float) $data['translated_words'];
        }
        if (array_key_exists('untranslated_strings', $data) && is_int($data['untranslated_strings'])) {
            $data['untranslated_strings'] = (float) $data['untranslated_strings'];
        }
        if (array_key_exists('untranslated_words', $data) && is_int($data['untranslated_words'])) {
            $data['untranslated_words'] = (float) $data['untranslated_words'];
        }
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (array_key_exists('last_proofread_update', $data) && null !== $data['last_proofread_update']) {
            $object->setLastProofreadUpdate(DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['last_proofread_update']));
            unset($data['last_proofread_update']);
        } elseif (array_key_exists('last_proofread_update', $data) && null === $data['last_proofread_update']) {
            $object->setLastProofreadUpdate(null);
        }
        if (array_key_exists('last_review_update', $data) && null !== $data['last_review_update']) {
            $object->setLastReviewUpdate(DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['last_review_update']));
            unset($data['last_review_update']);
        } elseif (array_key_exists('last_review_update', $data) && null === $data['last_review_update']) {
            $object->setLastReviewUpdate(null);
        }
        if (array_key_exists('last_translation_update', $data) && null !== $data['last_translation_update']) {
            $object->setLastTranslationUpdate(DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['last_translation_update']));
            unset($data['last_translation_update']);
        } elseif (array_key_exists('last_translation_update', $data) && null === $data['last_translation_update']) {
            $object->setLastTranslationUpdate(null);
        }
        if (array_key_exists('last_update', $data)) {
            $object->setLastUpdate(DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['last_update']));
            unset($data['last_update']);
        }
        if (array_key_exists('proofread_strings', $data)) {
            $object->setProofreadStrings($data['proofread_strings']);
            unset($data['proofread_strings']);
        }
        if (array_key_exists('proofread_words', $data)) {
            $object->setProofreadWords($data['proofread_words']);
            unset($data['proofread_words']);
        }
        if (array_key_exists('reviewed_strings', $data)) {
            $object->setReviewedStrings($data['reviewed_strings']);
            unset($data['reviewed_strings']);
        }
        if (array_key_exists('reviewed_words', $data)) {
            $object->setReviewedWords($data['reviewed_words']);
            unset($data['reviewed_words']);
        }
        if (array_key_exists('total_strings', $data)) {
            $object->setTotalStrings($data['total_strings']);
            unset($data['total_strings']);
        }
        if (array_key_exists('total_words', $data)) {
            $object->setTotalWords($data['total_words']);
            unset($data['total_words']);
        }
        if (array_key_exists('translated_strings', $data)) {
            $object->setTranslatedStrings($data['translated_strings']);
            unset($data['translated_strings']);
        }
        if (array_key_exists('translated_words', $data)) {
            $object->setTranslatedWords($data['translated_words']);
            unset($data['translated_words']);
        }
        if (array_key_exists('untranslated_strings', $data)) {
            $object->setUntranslatedStrings($data['untranslated_strings']);
            unset($data['untranslated_strings']);
        }
        if (array_key_exists('untranslated_words', $data)) {
            $object->setUntranslatedWords($data['untranslated_words']);
            unset($data['untranslated_words']);
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
        if (null !== $object->getLastProofreadUpdate()) {
            $data['last_proofread_update'] = $object->getLastProofreadUpdate()->format('Y-m-d\\TH:i:sP');
        }
        if (null !== $object->getLastReviewUpdate()) {
            $data['last_review_update'] = $object->getLastReviewUpdate()->format('Y-m-d\\TH:i:sP');
        }
        if (null !== $object->getLastTranslationUpdate()) {
            $data['last_translation_update'] = $object->getLastTranslationUpdate()->format('Y-m-d\\TH:i:sP');
        }
        if (null !== $object->getLastUpdate()) {
            $data['last_update'] = $object->getLastUpdate()->format('Y-m-d\\TH:i:sP');
        }
        if (null !== $object->getProofreadStrings()) {
            $data['proofread_strings'] = $object->getProofreadStrings();
        }
        if (null !== $object->getProofreadWords()) {
            $data['proofread_words'] = $object->getProofreadWords();
        }
        if (null !== $object->getReviewedStrings()) {
            $data['reviewed_strings'] = $object->getReviewedStrings();
        }
        if (null !== $object->getReviewedWords()) {
            $data['reviewed_words'] = $object->getReviewedWords();
        }
        if (null !== $object->getTotalStrings()) {
            $data['total_strings'] = $object->getTotalStrings();
        }
        if (null !== $object->getTotalWords()) {
            $data['total_words'] = $object->getTotalWords();
        }
        if (null !== $object->getTranslatedStrings()) {
            $data['translated_strings'] = $object->getTranslatedStrings();
        }
        if (null !== $object->getTranslatedWords()) {
            $data['translated_words'] = $object->getTranslatedWords();
        }
        if (null !== $object->getUntranslatedStrings()) {
            $data['untranslated_strings'] = $object->getUntranslatedStrings();
        }
        if (null !== $object->getUntranslatedWords()) {
            $data['untranslated_words'] = $object->getUntranslatedWords();
        }
        foreach ($object as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value;
            }
        }

        return $data;
    }
}
