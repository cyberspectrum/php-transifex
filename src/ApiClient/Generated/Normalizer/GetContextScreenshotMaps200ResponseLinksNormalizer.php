<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Normalizer;

use ArrayObject;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\GetContextScreenshotMaps200ResponseLinks;
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

class GetContextScreenshotMaps200ResponseLinksNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return GetContextScreenshotMaps200ResponseLinks::class === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && GetContextScreenshotMaps200ResponseLinks::class === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new GetContextScreenshotMaps200ResponseLinks();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (array_key_exists('next', $data) && null !== $data['next']) {
            $object->setNext($data['next']);
        } elseif (array_key_exists('next', $data) && null === $data['next']) {
            $object->setNext(null);
        }
        if (array_key_exists('previous', $data) && null !== $data['previous']) {
            $object->setPrevious($data['previous']);
        } elseif (array_key_exists('previous', $data) && null === $data['previous']) {
            $object->setPrevious(null);
        }
        if (array_key_exists('self', $data)) {
            $object->setSelf($data['self']);
        }

        return $object;
    }

    /**
     * @return array|ArrayObject|bool|float|int|string|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if (null !== $object->getNext()) {
            $data['next'] = $object->getNext();
        }
        if (null !== $object->getPrevious()) {
            $data['previous'] = $object->getPrevious();
        }
        if (null !== $object->getSelf()) {
            $data['self'] = $object->getSelf();
        }

        return $data;
    }

    public function getSupportedTypes(string $format = null): array
    {
        return [GetContextScreenshotMaps200ResponseLinks::class => false];
    }
}
