<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Normalizer;

use ArrayObject;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\GetOrganizationsResponseDataAttributes;
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

class GetOrganizationsResponseDataAttributesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return GetOrganizationsResponseDataAttributes::class === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && GetOrganizationsResponseDataAttributes::class === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new GetOrganizationsResponseDataAttributes();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (array_key_exists('logo_url', $data) && null !== $data['logo_url']) {
            $object->setLogoUrl($data['logo_url']);
        } elseif (array_key_exists('logo_url', $data) && null === $data['logo_url']) {
            $object->setLogoUrl(null);
        }
        if (array_key_exists('name', $data)) {
            $object->setName($data['name']);
        }
        if (array_key_exists('private', $data)) {
            $object->setPrivate($data['private']);
        }
        if (array_key_exists('slug', $data)) {
            $object->setSlug($data['slug']);
        }

        return $object;
    }

    /**
     * @return array|ArrayObject|bool|float|int|string|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if ($object->isInitialized('logoUrl') && null !== $object->getLogoUrl()) {
            $data['logo_url'] = $object->getLogoUrl();
        }
        if (null !== $object->getName()) {
            $data['name'] = $object->getName();
        }
        if (null !== $object->getPrivate()) {
            $data['private'] = $object->getPrivate();
        }
        if (null !== $object->getSlug()) {
            $data['slug'] = $object->getSlug();
        }

        return $data;
    }
}
