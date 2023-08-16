<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Normalizer;

use ArrayObject;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\GetI18nFormats200ResponseDataItemsAttributes;
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

class GetI18nFormats200ResponseDataItemsAttributesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return GetI18nFormats200ResponseDataItemsAttributes::class === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && GetI18nFormats200ResponseDataItemsAttributes::class === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new GetI18nFormats200ResponseDataItemsAttributes();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (array_key_exists('description', $data)) {
            $object->setDescription($data['description']);
        }
        if (array_key_exists('file_extensions', $data)) {
            $values = [];
            foreach ($data['file_extensions'] as $value) {
                $values[] = $value;
            }
            $object->setFileExtensions($values);
        }
        if (array_key_exists('media_type', $data)) {
            $object->setMediaType($data['media_type']);
        }
        if (array_key_exists('name', $data)) {
            $object->setName($data['name']);
        }

        return $object;
    }

    /**
     * @return array|ArrayObject|bool|float|int|string|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if (null !== $object->getDescription()) {
            $data['description'] = $object->getDescription();
        }
        if (null !== $object->getFileExtensions()) {
            $values = [];
            foreach ($object->getFileExtensions() as $value) {
                $values[] = $value;
            }
            $data['file_extensions'] = $values;
        }
        if (null !== $object->getMediaType()) {
            $data['media_type'] = $object->getMediaType();
        }
        if (null !== $object->getName()) {
            $data['name'] = $object->getName();
        }

        return $data;
    }

    public function getSupportedTypes(string $format = null): array
    {
        return [GetI18nFormats200ResponseDataItemsAttributes::class => false];
    }
}
