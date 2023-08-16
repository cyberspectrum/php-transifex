<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Normalizer;

use ArrayObject;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\TeamActivityReportsAsyncDownloadsResponseDataattributes;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\TeamActivityReportsAsyncDownloadsResponseDataattributesErrorsItem;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Runtime\Normalizer\CheckArray;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Runtime\Normalizer\ValidatorTrait;
use DateTime;
use Jane\Component\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

use function array_key_exists;
use function is_array;

class TeamActivityReportsAsyncDownloadsResponseDataattributesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return TeamActivityReportsAsyncDownloadsResponseDataattributes::class === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && TeamActivityReportsAsyncDownloadsResponseDataattributes::class === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new TeamActivityReportsAsyncDownloadsResponseDataattributes();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (array_key_exists('datetime_created', $data)) {
            $object->setDatetimeCreated(DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['datetime_created']));
        }
        if (array_key_exists('datetime_modified', $data)) {
            $object->setDatetimeModified(DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['datetime_modified']));
        }
        if (array_key_exists('errors', $data)) {
            $values = [];
            foreach ($data['errors'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, TeamActivityReportsAsyncDownloadsResponseDataattributesErrorsItem::class, 'json', $context);
            }
            $object->setErrors($values);
        }
        if (array_key_exists('status', $data)) {
            $object->setStatus($data['status']);
        }

        return $object;
    }

    /**
     * @return array|ArrayObject|bool|float|int|string|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if (null !== $object->getDatetimeCreated()) {
            $data['datetime_created'] = $object->getDatetimeCreated()->format('Y-m-d\\TH:i:sP');
        }
        if (null !== $object->getDatetimeModified()) {
            $data['datetime_modified'] = $object->getDatetimeModified()->format('Y-m-d\\TH:i:sP');
        }
        if (null !== $object->getErrors()) {
            $values = [];
            foreach ($object->getErrors() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['errors'] = $values;
        }
        if (null !== $object->getStatus()) {
            $data['status'] = $object->getStatus();
        }

        return $data;
    }

    public function getSupportedTypes(string $format = null): array
    {
        return [TeamActivityReportsAsyncDownloadsResponseDataattributes::class => false];
    }
}
