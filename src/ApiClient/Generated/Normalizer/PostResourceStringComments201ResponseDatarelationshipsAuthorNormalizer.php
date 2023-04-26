<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Normalizer;

use ArrayObject;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\PostResourceStringComments201ResponseDatarelationshipsAuthor;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\PostResourceStringComments201ResponseDatarelationshipsAuthorData;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\PostResourceStringComments201ResponseDatarelationshipsAuthorLinks;
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

class PostResourceStringComments201ResponseDatarelationshipsAuthorNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return PostResourceStringComments201ResponseDatarelationshipsAuthor::class === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && PostResourceStringComments201ResponseDatarelationshipsAuthor::class === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new PostResourceStringComments201ResponseDatarelationshipsAuthor();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (array_key_exists('data', $data)) {
            $object->setData($this->denormalizer->denormalize($data['data'], PostResourceStringComments201ResponseDatarelationshipsAuthorData::class, 'json', $context));
        }
        if (array_key_exists('links', $data)) {
            $object->setLinks($this->denormalizer->denormalize($data['links'], PostResourceStringComments201ResponseDatarelationshipsAuthorLinks::class, 'json', $context));
        }

        return $object;
    }

    /**
     * @return array|ArrayObject|bool|float|int|string|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if ($object->isInitialized('data') && null !== $object->getData()) {
            $data['data'] = $this->normalizer->normalize($object->getData(), 'json', $context);
        }
        if ($object->isInitialized('links') && null !== $object->getLinks()) {
            $data['links'] = $this->normalizer->normalize($object->getLinks(), 'json', $context);
        }

        return $data;
    }
}
