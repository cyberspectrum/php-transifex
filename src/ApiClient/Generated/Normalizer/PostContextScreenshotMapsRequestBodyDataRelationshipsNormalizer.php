<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Normalizer;

use ArrayObject;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\PostContextScreenshotMapsRequestBodyDataRelationships;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\PostContextScreenshotMapsRequestBodyDataRelationshipsContextScreenshot;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\PostContextScreenshotMapsRequestBodyDataRelationshipsResourceString;
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

class PostContextScreenshotMapsRequestBodyDataRelationshipsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return PostContextScreenshotMapsRequestBodyDataRelationships::class === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && PostContextScreenshotMapsRequestBodyDataRelationships::class === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new PostContextScreenshotMapsRequestBodyDataRelationships();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (array_key_exists('context_screenshot', $data)) {
            $object->setContextScreenshot($this->denormalizer->denormalize($data['context_screenshot'], PostContextScreenshotMapsRequestBodyDataRelationshipsContextScreenshot::class, 'json', $context));
        }
        if (array_key_exists('resource_string', $data)) {
            $object->setResourceString($this->denormalizer->denormalize($data['resource_string'], PostContextScreenshotMapsRequestBodyDataRelationshipsResourceString::class, 'json', $context));
        }

        return $object;
    }

    /**
     * @return array|ArrayObject|bool|float|int|string|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if (null !== $object->getContextScreenshot()) {
            $data['context_screenshot'] = $this->normalizer->normalize($object->getContextScreenshot(), 'json', $context);
        }
        if (null !== $object->getResourceString()) {
            $data['resource_string'] = $this->normalizer->normalize($object->getResourceString(), 'json', $context);
        }

        return $data;
    }

    public function getSupportedTypes(string $format = null): array
    {
        return [PostContextScreenshotMapsRequestBodyDataRelationships::class => false];
    }
}
