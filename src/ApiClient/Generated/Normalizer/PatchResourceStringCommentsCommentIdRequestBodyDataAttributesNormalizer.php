<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Normalizer;

use ArrayObject;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\PatchResourceStringCommentsCommentIdRequestBodyDataAttributes;
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

class PatchResourceStringCommentsCommentIdRequestBodyDataAttributesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return PatchResourceStringCommentsCommentIdRequestBodyDataAttributes::class === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && PatchResourceStringCommentsCommentIdRequestBodyDataAttributes::class === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new PatchResourceStringCommentsCommentIdRequestBodyDataAttributes();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (array_key_exists('category', $data) && null !== $data['category']) {
            $object->setCategory($data['category']);
        } elseif (array_key_exists('category', $data) && null === $data['category']) {
            $object->setCategory(null);
        }
        if (array_key_exists('message', $data)) {
            $object->setMessage($data['message']);
        }
        if (array_key_exists('priority', $data) && null !== $data['priority']) {
            $object->setPriority($data['priority']);
        } elseif (array_key_exists('priority', $data) && null === $data['priority']) {
            $object->setPriority(null);
        }
        if (array_key_exists('status', $data) && null !== $data['status']) {
            $object->setStatus($data['status']);
        } elseif (array_key_exists('status', $data) && null === $data['status']) {
            $object->setStatus(null);
        }

        return $object;
    }

    /**
     * @return array|ArrayObject|bool|float|int|string|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if ($object->isInitialized('category') && null !== $object->getCategory()) {
            $data['category'] = $object->getCategory();
        }
        if ($object->isInitialized('message') && null !== $object->getMessage()) {
            $data['message'] = $object->getMessage();
        }
        if ($object->isInitialized('priority') && null !== $object->getPriority()) {
            $data['priority'] = $object->getPriority();
        }
        if ($object->isInitialized('status') && null !== $object->getStatus()) {
            $data['status'] = $object->getStatus();
        }

        return $data;
    }

    public function getSupportedTypes(string $format = null): array
    {
        return [PatchResourceStringCommentsCommentIdRequestBodyDataAttributes::class => false];
    }
}
