<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Normalizer;

use ArrayObject;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\ResourceResponseRelationshipsLanguage;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\ResourceResponseRelationshipsResource;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\ResourceTranslationsResponseDataRelationships;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\ResourceTranslationsResponseDataRelationships1;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\ResourceTranslationsResponseDataRelationshipsResourceString;
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

class ResourceTranslationsResponseDataRelationships1Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return ResourceTranslationsResponseDataRelationships1::class === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && ResourceTranslationsResponseDataRelationships1::class === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new ResourceTranslationsResponseDataRelationships1();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (array_key_exists('language', $data)) {
            $object->setLanguage($this->denormalizer->denormalize($data['language'], ResourceResponseRelationshipsLanguage::class, 'json', $context));
        }
        if (array_key_exists('proofreader', $data) && null !== $data['proofreader']) {
            $object->setProofreader($this->denormalizer->denormalize($data['proofreader'], ResourceTranslationsResponseDataRelationships::class, 'json', $context));
        } elseif (array_key_exists('proofreader', $data) && null === $data['proofreader']) {
            $object->setProofreader(null);
        }
        if (array_key_exists('resource', $data)) {
            $object->setResource($this->denormalizer->denormalize($data['resource'], ResourceResponseRelationshipsResource::class, 'json', $context));
        }
        if (array_key_exists('resource_string', $data)) {
            $object->setResourceString($this->denormalizer->denormalize($data['resource_string'], ResourceTranslationsResponseDataRelationshipsResourceString::class, 'json', $context));
        }
        if (array_key_exists('reviewer', $data) && null !== $data['reviewer']) {
            $object->setReviewer($this->denormalizer->denormalize($data['reviewer'], ResourceTranslationsResponseDataRelationships::class, 'json', $context));
        } elseif (array_key_exists('reviewer', $data) && null === $data['reviewer']) {
            $object->setReviewer(null);
        }
        if (array_key_exists('translator', $data) && null !== $data['translator']) {
            $object->setTranslator($this->denormalizer->denormalize($data['translator'], ResourceTranslationsResponseDataRelationships::class, 'json', $context));
        } elseif (array_key_exists('translator', $data) && null === $data['translator']) {
            $object->setTranslator(null);
        }

        return $object;
    }

    /**
     * @return array|ArrayObject|bool|float|int|string|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if (null !== $object->getLanguage()) {
            $data['language'] = $this->normalizer->normalize($object->getLanguage(), 'json', $context);
        }
        if (null !== $object->getProofreader()) {
            $data['proofreader'] = $this->normalizer->normalize($object->getProofreader(), 'json', $context);
        }
        if (null !== $object->getResource()) {
            $data['resource'] = $this->normalizer->normalize($object->getResource(), 'json', $context);
        }
        if (null !== $object->getResourceString()) {
            $data['resource_string'] = $this->normalizer->normalize($object->getResourceString(), 'json', $context);
        }
        if (null !== $object->getReviewer()) {
            $data['reviewer'] = $this->normalizer->normalize($object->getReviewer(), 'json', $context);
        }
        if (null !== $object->getTranslator()) {
            $data['translator'] = $this->normalizer->normalize($object->getTranslator(), 'json', $context);
        }

        return $data;
    }

    public function getSupportedTypes(string $format = null): array
    {
        return [ResourceTranslationsResponseDataRelationships1::class => false];
    }
}
