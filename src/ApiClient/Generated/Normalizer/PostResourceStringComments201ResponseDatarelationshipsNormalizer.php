<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Normalizer;

use ArrayObject;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\PostResourceStringComments201ResponseDatarelationships;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\PostResourceStringComments201ResponseDatarelationshipsAuthor;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\PostResourceStringComments201ResponseDatarelationshipsLanguage;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\PostResourceStringComments201ResponseDatarelationshipsResolver;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\PostResourceStringComments201ResponseDatarelationshipsResource;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\PostResourceStringComments201ResponseDatarelationshipsResourceString;
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

class PostResourceStringComments201ResponseDatarelationshipsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return PostResourceStringComments201ResponseDatarelationships::class === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && PostResourceStringComments201ResponseDatarelationships::class === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new PostResourceStringComments201ResponseDatarelationships();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (array_key_exists('author', $data)) {
            $object->setAuthor($this->denormalizer->denormalize($data['author'], PostResourceStringComments201ResponseDatarelationshipsAuthor::class, 'json', $context));
        }
        if (array_key_exists('language', $data)) {
            $object->setLanguage($this->denormalizer->denormalize($data['language'], PostResourceStringComments201ResponseDatarelationshipsLanguage::class, 'json', $context));
        }
        if (array_key_exists('resolver', $data) && null !== $data['resolver']) {
            $object->setResolver($this->denormalizer->denormalize($data['resolver'], PostResourceStringComments201ResponseDatarelationshipsResolver::class, 'json', $context));
        } elseif (array_key_exists('resolver', $data) && null === $data['resolver']) {
            $object->setResolver(null);
        }
        if (array_key_exists('resource', $data)) {
            $object->setResource($this->denormalizer->denormalize($data['resource'], PostResourceStringComments201ResponseDatarelationshipsResource::class, 'json', $context));
        }
        if (array_key_exists('resource_string', $data)) {
            $object->setResourceString($this->denormalizer->denormalize($data['resource_string'], PostResourceStringComments201ResponseDatarelationshipsResourceString::class, 'json', $context));
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
        return [PostResourceStringComments201ResponseDatarelationships::class => false];
    }
}
