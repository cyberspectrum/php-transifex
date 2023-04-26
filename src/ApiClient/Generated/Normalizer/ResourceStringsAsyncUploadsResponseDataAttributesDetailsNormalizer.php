<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Normalizer;

use ArrayObject;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\ResourceStringsAsyncUploadsResponseDataAttributesDetails;
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

class ResourceStringsAsyncUploadsResponseDataAttributesDetailsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return ResourceStringsAsyncUploadsResponseDataAttributesDetails::class === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && ResourceStringsAsyncUploadsResponseDataAttributesDetails::class === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new ResourceStringsAsyncUploadsResponseDataAttributesDetails();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (array_key_exists('strings_created', $data)) {
            $object->setStringsCreated($data['strings_created']);
        }
        if (array_key_exists('strings_deleted', $data)) {
            $object->setStringsDeleted($data['strings_deleted']);
        }
        if (array_key_exists('strings_skipped', $data)) {
            $object->setStringsSkipped($data['strings_skipped']);
        }
        if (array_key_exists('strings_updated', $data)) {
            $object->setStringsUpdated($data['strings_updated']);
        }

        return $object;
    }

    /**
     * @return array|ArrayObject|bool|float|int|string|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if (null !== $object->getStringsCreated()) {
            $data['strings_created'] = $object->getStringsCreated();
        }
        if (null !== $object->getStringsDeleted()) {
            $data['strings_deleted'] = $object->getStringsDeleted();
        }
        if (null !== $object->getStringsSkipped()) {
            $data['strings_skipped'] = $object->getStringsSkipped();
        }
        if (null !== $object->getStringsUpdated()) {
            $data['strings_updated'] = $object->getStringsUpdated();
        }

        return $data;
    }
}
