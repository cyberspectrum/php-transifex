<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Normalizer;

use ArrayObject;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\OrganizationActivityReportsAsyncDownloadsResponseDatarelationships;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\OrganizationActivityReportsAsyncDownloadsResponseDatarelationshipsLanguage;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\OrganizationActivityReportsAsyncDownloadsResponseDatarelationshipsOrganization;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\OrganizationActivityReportsAsyncDownloadsResponseDatarelationshipsUser;
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

class OrganizationActivityReportsAsyncDownloadsResponseDatarelationshipsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return OrganizationActivityReportsAsyncDownloadsResponseDatarelationships::class === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && OrganizationActivityReportsAsyncDownloadsResponseDatarelationships::class === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new OrganizationActivityReportsAsyncDownloadsResponseDatarelationships();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (array_key_exists('language', $data)) {
            $object->setLanguage($this->denormalizer->denormalize($data['language'], OrganizationActivityReportsAsyncDownloadsResponseDatarelationshipsLanguage::class, 'json', $context));
            unset($data['language']);
        }
        if (array_key_exists('organization', $data)) {
            $object->setOrganization($this->denormalizer->denormalize($data['organization'], OrganizationActivityReportsAsyncDownloadsResponseDatarelationshipsOrganization::class, 'json', $context));
            unset($data['organization']);
        }
        if (array_key_exists('user', $data)) {
            $object->setUser($this->denormalizer->denormalize($data['user'], OrganizationActivityReportsAsyncDownloadsResponseDatarelationshipsUser::class, 'json', $context));
            unset($data['user']);
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value;
            }
        }

        return $object;
    }

    /**
     * @return array|ArrayObject|bool|float|int|string|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if ($object->isInitialized('language') && null !== $object->getLanguage()) {
            $data['language'] = $this->normalizer->normalize($object->getLanguage(), 'json', $context);
        }
        if (null !== $object->getOrganization()) {
            $data['organization'] = $this->normalizer->normalize($object->getOrganization(), 'json', $context);
        }
        if ($object->isInitialized('user') && null !== $object->getUser()) {
            $data['user'] = $this->normalizer->normalize($object->getUser(), 'json', $context);
        }
        foreach ($object as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value;
            }
        }

        return $data;
    }

    public function getSupportedTypes(string $format = null): array
    {
        return [OrganizationActivityReportsAsyncDownloadsResponseDatarelationships::class => false];
    }
}
