<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Normalizer;

use ArrayObject;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\GetResourceStringsRevisions200ResponseDataItemsAttributes;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\ResourceStringsAttributesStrings;
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

class GetResourceStringsRevisions200ResponseDataItemsAttributesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return GetResourceStringsRevisions200ResponseDataItemsAttributes::class === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && GetResourceStringsRevisions200ResponseDataItemsAttributes::class === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new GetResourceStringsRevisions200ResponseDataItemsAttributes();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (array_key_exists('date_created', $data)) {
            $object->setDateCreated(DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['date_created']));
        }
        if (array_key_exists('strings', $data)) {
            $object->setStrings($this->denormalizer->denormalize($data['strings'], ResourceStringsAttributesStrings::class, 'json', $context));
        }

        return $object;
    }

    /**
     * @return array|ArrayObject|bool|float|int|string|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if (null !== $object->getDateCreated()) {
            $data['date_created'] = $object->getDateCreated()->format('Y-m-d\\TH:i:sP');
        }
        if (null !== $object->getStrings()) {
            $data['strings'] = $this->normalizer->normalize($object->getStrings(), 'json', $context);
        }

        return $data;
    }
}
