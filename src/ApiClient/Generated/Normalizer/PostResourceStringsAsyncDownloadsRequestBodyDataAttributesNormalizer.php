<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Normalizer;

use ArrayObject;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\PostResourceStringsAsyncDownloadsRequestBodyDataAttributes;
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

class PostResourceStringsAsyncDownloadsRequestBodyDataAttributesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return PostResourceStringsAsyncDownloadsRequestBodyDataAttributes::class === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && PostResourceStringsAsyncDownloadsRequestBodyDataAttributes::class === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new PostResourceStringsAsyncDownloadsRequestBodyDataAttributes();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (array_key_exists('callback_url', $data) && null !== $data['callback_url']) {
            $object->setCallbackUrl($data['callback_url']);
        } elseif (array_key_exists('callback_url', $data) && null === $data['callback_url']) {
            $object->setCallbackUrl(null);
        }
        if (array_key_exists('content_encoding', $data)) {
            $object->setContentEncoding($data['content_encoding']);
        }
        if (array_key_exists('file_type', $data)) {
            $object->setFileType($data['file_type']);
        }
        if (array_key_exists('pseudo', $data)) {
            $object->setPseudo($data['pseudo']);
        }
        if (array_key_exists('pseudo_length_increase', $data) && null !== $data['pseudo_length_increase']) {
            $object->setPseudoLengthIncrease($data['pseudo_length_increase']);
        } elseif (array_key_exists('pseudo_length_increase', $data) && null === $data['pseudo_length_increase']) {
            $object->setPseudoLengthIncrease(null);
        }

        return $object;
    }

    /**
     * @return array|ArrayObject|bool|float|int|string|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if ($object->isInitialized('callbackUrl') && null !== $object->getCallbackUrl()) {
            $data['callback_url'] = $object->getCallbackUrl();
        }
        if ($object->isInitialized('contentEncoding') && null !== $object->getContentEncoding()) {
            $data['content_encoding'] = $object->getContentEncoding();
        }
        if ($object->isInitialized('fileType') && null !== $object->getFileType()) {
            $data['file_type'] = $object->getFileType();
        }
        if ($object->isInitialized('pseudo') && null !== $object->getPseudo()) {
            $data['pseudo'] = $object->getPseudo();
        }
        if ($object->isInitialized('pseudoLengthIncrease') && null !== $object->getPseudoLengthIncrease()) {
            $data['pseudo_length_increase'] = $object->getPseudoLengthIncrease();
        }

        return $data;
    }

    public function getSupportedTypes(string $format = null): array
    {
        return [PostResourceStringsAsyncDownloadsRequestBodyDataAttributes::class => false];
    }
}
