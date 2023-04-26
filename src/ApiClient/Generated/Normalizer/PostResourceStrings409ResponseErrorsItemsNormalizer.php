<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Normalizer;

use ArrayObject;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\PostResourceStrings409ResponseErrorsItems;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\PostResourceStrings409ResponseErrorsItemsSource;
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

class PostResourceStrings409ResponseErrorsItemsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return PostResourceStrings409ResponseErrorsItems::class === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && PostResourceStrings409ResponseErrorsItems::class === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new PostResourceStrings409ResponseErrorsItems();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (array_key_exists('code', $data)) {
            $object->setCode($data['code']);
        }
        if (array_key_exists('detail', $data)) {
            $object->setDetail($data['detail']);
        }
        if (array_key_exists('source', $data)) {
            $object->setSource($this->denormalizer->denormalize($data['source'], PostResourceStrings409ResponseErrorsItemsSource::class, 'json', $context));
        }
        if (array_key_exists('status', $data)) {
            $object->setStatus($data['status']);
        }
        if (array_key_exists('title', $data)) {
            $object->setTitle($data['title']);
        }

        return $object;
    }

    /**
     * @return array|ArrayObject|bool|float|int|string|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if ($object->isInitialized('code') && null !== $object->getCode()) {
            $data['code'] = $object->getCode();
        }
        if ($object->isInitialized('detail') && null !== $object->getDetail()) {
            $data['detail'] = $object->getDetail();
        }
        if ($object->isInitialized('source') && null !== $object->getSource()) {
            $data['source'] = $this->normalizer->normalize($object->getSource(), 'json', $context);
        }
        if ($object->isInitialized('status') && null !== $object->getStatus()) {
            $data['status'] = $object->getStatus();
        }
        if ($object->isInitialized('title') && null !== $object->getTitle()) {
            $data['title'] = $object->getTitle();
        }

        return $data;
    }
}
