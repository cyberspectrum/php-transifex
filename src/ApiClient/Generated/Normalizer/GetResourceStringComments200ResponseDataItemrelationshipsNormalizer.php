<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Normalizer;

use ArrayObject;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\GetResourceStringComments200ResponseDataItemrelationships;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\GetResourceStringComments200ResponseDataItemrelationshipsAuthor;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\GetResourceStringComments200ResponseDataItemrelationshipsLanguage;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\GetResourceStringComments200ResponseDataItemrelationshipsResolver;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\GetResourceStringComments200ResponseDataItemrelationshipsResource;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\GetResourceStringComments200ResponseDataItemrelationshipsResourceString;
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

class GetResourceStringComments200ResponseDataItemrelationshipsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return GetResourceStringComments200ResponseDataItemrelationships::class === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && GetResourceStringComments200ResponseDataItemrelationships::class === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new GetResourceStringComments200ResponseDataItemrelationships();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (array_key_exists('author', $data)) {
            $object->setAuthor($this->denormalizer->denormalize($data['author'], GetResourceStringComments200ResponseDataItemrelationshipsAuthor::class, 'json', $context));
        }
        if (array_key_exists('language', $data)) {
            $object->setLanguage($this->denormalizer->denormalize($data['language'], GetResourceStringComments200ResponseDataItemrelationshipsLanguage::class, 'json', $context));
        }
        if (array_key_exists('resolver', $data) && null !== $data['resolver']) {
            $object->setResolver($this->denormalizer->denormalize($data['resolver'], GetResourceStringComments200ResponseDataItemrelationshipsResolver::class, 'json', $context));
        } elseif (array_key_exists('resolver', $data) && null === $data['resolver']) {
            $object->setResolver(null);
        }
        if (array_key_exists('resource', $data)) {
            $object->setResource($this->denormalizer->denormalize($data['resource'], GetResourceStringComments200ResponseDataItemrelationshipsResource::class, 'json', $context));
        }
        if (array_key_exists('resource_string', $data)) {
            $object->setResourceString($this->denormalizer->denormalize($data['resource_string'], GetResourceStringComments200ResponseDataItemrelationshipsResourceString::class, 'json', $context));
        }

        return $object;
    }

    /**
     * @return array|ArrayObject|bool|float|int|string|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if ($object->isInitialized('author') && null !== $object->getAuthor()) {
            $data['author'] = $this->normalizer->normalize($object->getAuthor(), 'json', $context);
        }
        if (null !== $object->getLanguage()) {
            $data['language'] = $this->normalizer->normalize($object->getLanguage(), 'json', $context);
        }
        if ($object->isInitialized('resolver') && null !== $object->getResolver()) {
            $data['resolver'] = $this->normalizer->normalize($object->getResolver(), 'json', $context);
        }
        if (null !== $object->getResource()) {
            $data['resource'] = $this->normalizer->normalize($object->getResource(), 'json', $context);
        }
        if (null !== $object->getResourceString()) {
            $data['resource_string'] = $this->normalizer->normalize($object->getResourceString(), 'json', $context);
        }

        return $data;
    }

    public function getSupportedTypes(string $format = null): array
    {
        return [GetResourceStringComments200ResponseDataItemrelationships::class => false];
    }
}
