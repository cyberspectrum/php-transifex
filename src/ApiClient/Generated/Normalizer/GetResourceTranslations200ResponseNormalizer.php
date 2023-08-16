<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Normalizer;

use ArrayObject;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\GetResourceTranslations200Response;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\GetResourceTranslations200ResponseLinks;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\ResourceResponse;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\ResourceTranslationsResponseData;
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

class GetResourceTranslations200ResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return GetResourceTranslations200Response::class === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && GetResourceTranslations200Response::class === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new GetResourceTranslations200Response();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (array_key_exists('data', $data)) {
            $values = [];
            foreach ($data['data'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, ResourceTranslationsResponseData::class, 'json', $context);
            }
            $object->setData($values);
        }
        if (array_key_exists('included', $data)) {
            $values_1 = [];
            foreach ($data['included'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, ResourceResponse::class, 'json', $context);
            }
            $object->setIncluded($values_1);
        }
        if (array_key_exists('links', $data)) {
            $object->setLinks($this->denormalizer->denormalize($data['links'], GetResourceTranslations200ResponseLinks::class, 'json', $context));
        }

        return $object;
    }

    /**
     * @return array|ArrayObject|bool|float|int|string|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if (null !== $object->getData()) {
            $values = [];
            foreach ($object->getData() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['data'] = $values;
        }
        if ($object->isInitialized('included') && null !== $object->getIncluded()) {
            $values_1 = [];
            foreach ($object->getIncluded() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['included'] = $values_1;
        }
        if (null !== $object->getLinks()) {
            $data['links'] = $this->normalizer->normalize($object->getLinks(), 'json', $context);
        }

        return $data;
    }

    public function getSupportedTypes(string $format = null): array
    {
        return [GetResourceTranslations200Response::class => false];
    }
}
