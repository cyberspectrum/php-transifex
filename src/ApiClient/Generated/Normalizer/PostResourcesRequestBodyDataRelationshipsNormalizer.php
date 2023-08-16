<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Normalizer;

use ArrayObject;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\PostResourcesRequestBodyDataRelationships;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\PostResourcesRequestBodyDataRelationshipsI18nFormat;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\PostResourcesRequestBodyDataRelationshipsProject;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\ResourcesRequestBodyDataRelationshipsBase;
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

class PostResourcesRequestBodyDataRelationshipsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return PostResourcesRequestBodyDataRelationships::class === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && PostResourcesRequestBodyDataRelationships::class === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new PostResourcesRequestBodyDataRelationships();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (array_key_exists('base', $data) && null !== $data['base']) {
            $object->setBase($this->denormalizer->denormalize($data['base'], ResourcesRequestBodyDataRelationshipsBase::class, 'json', $context));
        } elseif (array_key_exists('base', $data) && null === $data['base']) {
            $object->setBase(null);
        }
        if (array_key_exists('i18n_format', $data)) {
            $object->setI18nFormat($this->denormalizer->denormalize($data['i18n_format'], PostResourcesRequestBodyDataRelationshipsI18nFormat::class, 'json', $context));
        }
        if (array_key_exists('project', $data)) {
            $object->setProject($this->denormalizer->denormalize($data['project'], PostResourcesRequestBodyDataRelationshipsProject::class, 'json', $context));
        }

        return $object;
    }

    /**
     * @return array|ArrayObject|bool|float|int|string|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if ($object->isInitialized('base') && null !== $object->getBase()) {
            $data['base'] = $this->normalizer->normalize($object->getBase(), 'json', $context);
        }
        if (null !== $object->getI18nFormat()) {
            $data['i18n_format'] = $this->normalizer->normalize($object->getI18nFormat(), 'json', $context);
        }
        if (null !== $object->getProject()) {
            $data['project'] = $this->normalizer->normalize($object->getProject(), 'json', $context);
        }

        return $data;
    }

    public function getSupportedTypes(string $format = null): array
    {
        return [PostResourcesRequestBodyDataRelationships::class => false];
    }
}
