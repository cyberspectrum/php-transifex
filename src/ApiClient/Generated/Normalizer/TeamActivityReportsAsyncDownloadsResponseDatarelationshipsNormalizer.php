<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Normalizer;

use ArrayObject;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\TeamActivityReportsAsyncDownloadsResponseDatarelationships;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\TeamActivityReportsAsyncDownloadsResponseDatarelationshipsLanguage;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\TeamActivityReportsAsyncDownloadsResponseDatarelationshipsTeam;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\TeamActivityReportsAsyncDownloadsResponseDatarelationshipsUser;
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

class TeamActivityReportsAsyncDownloadsResponseDatarelationshipsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return TeamActivityReportsAsyncDownloadsResponseDatarelationships::class === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && TeamActivityReportsAsyncDownloadsResponseDatarelationships::class === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new TeamActivityReportsAsyncDownloadsResponseDatarelationships();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (array_key_exists('language', $data)) {
            $object->setLanguage($this->denormalizer->denormalize($data['language'], TeamActivityReportsAsyncDownloadsResponseDatarelationshipsLanguage::class, 'json', $context));
            unset($data['language']);
        }
        if (array_key_exists('team', $data)) {
            $object->setTeam($this->denormalizer->denormalize($data['team'], TeamActivityReportsAsyncDownloadsResponseDatarelationshipsTeam::class, 'json', $context));
            unset($data['team']);
        }
        if (array_key_exists('user', $data)) {
            $object->setUser($this->denormalizer->denormalize($data['user'], TeamActivityReportsAsyncDownloadsResponseDatarelationshipsUser::class, 'json', $context));
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
        if (null !== $object->getTeam()) {
            $data['team'] = $this->normalizer->normalize($object->getTeam(), 'json', $context);
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
}
