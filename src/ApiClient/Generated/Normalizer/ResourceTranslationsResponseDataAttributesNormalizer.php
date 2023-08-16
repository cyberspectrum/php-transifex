<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Normalizer;

use ArrayObject;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\ResourceTranslationsResponseDataAttributes;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\ResourceTranslationsResponseDataAttributesStrings;
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

class ResourceTranslationsResponseDataAttributesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return ResourceTranslationsResponseDataAttributes::class === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && ResourceTranslationsResponseDataAttributes::class === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new ResourceTranslationsResponseDataAttributes();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (array_key_exists('datetime_created', $data)) {
            $object->setDatetimeCreated(DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['datetime_created']));
        }
        if (array_key_exists('datetime_proofread', $data) && null !== $data['datetime_proofread']) {
            $object->setDatetimeProofread(DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['datetime_proofread']));
        } elseif (array_key_exists('datetime_proofread', $data) && null === $data['datetime_proofread']) {
            $object->setDatetimeProofread(null);
        }
        if (array_key_exists('datetime_reviewed', $data) && null !== $data['datetime_reviewed']) {
            $object->setDatetimeReviewed(DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['datetime_reviewed']));
        } elseif (array_key_exists('datetime_reviewed', $data) && null === $data['datetime_reviewed']) {
            $object->setDatetimeReviewed(null);
        }
        if (array_key_exists('datetime_translated', $data) && null !== $data['datetime_translated']) {
            $object->setDatetimeTranslated(DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['datetime_translated']));
        } elseif (array_key_exists('datetime_translated', $data) && null === $data['datetime_translated']) {
            $object->setDatetimeTranslated(null);
        }
        if (array_key_exists('finalized', $data)) {
            $object->setFinalized($data['finalized']);
        }
        if (array_key_exists('proofread', $data)) {
            $object->setProofread($data['proofread']);
        }
        if (array_key_exists('reviewed', $data)) {
            $object->setReviewed($data['reviewed']);
        }
        if (array_key_exists('strings', $data) && null !== $data['strings']) {
            $object->setStrings($this->denormalizer->denormalize($data['strings'], ResourceTranslationsResponseDataAttributesStrings::class, 'json', $context));
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
        if (null !== $object->getDatetimeCreated()) {
            $data['datetime_created'] = $object->getDatetimeCreated()->format('Y-m-d\\TH:i:sP');
        }
        if (null !== $object->getDatetimeProofread()) {
            $data['datetime_proofread'] = $object->getDatetimeProofread()->format('Y-m-d\\TH:i:sP');
        }
        if (null !== $object->getDatetimeReviewed()) {
            $data['datetime_reviewed'] = $object->getDatetimeReviewed()->format('Y-m-d\\TH:i:sP');
        }
        if (null !== $object->getDatetimeTranslated()) {
            $data['datetime_translated'] = $object->getDatetimeTranslated()->format('Y-m-d\\TH:i:sP');
        }
        if (null !== $object->getFinalized()) {
            $data['finalized'] = $object->getFinalized();
        }
        if (null !== $object->getProofread()) {
            $data['proofread'] = $object->getProofread();
        }
        if (null !== $object->getReviewed()) {
            $data['reviewed'] = $object->getReviewed();
        }
        if (null !== $object->getStrings()) {
            $data['strings'] = $this->normalizer->normalize($object->getStrings(), 'json', $context);
        }

        return $data;
    }

    public function getSupportedTypes(string $format = null): array
    {
        return [ResourceTranslationsResponseDataAttributes::class => false];
    }
}
