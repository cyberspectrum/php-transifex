<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Normalizer;

use ArrayObject;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\GetResourceStringCommentsCommentId200ResponseDataattributes;
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

class GetResourceStringCommentsCommentId200ResponseDataattributesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return GetResourceStringCommentsCommentId200ResponseDataattributes::class === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && GetResourceStringCommentsCommentId200ResponseDataattributes::class === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new GetResourceStringCommentsCommentId200ResponseDataattributes();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (array_key_exists('category', $data) && null !== $data['category']) {
            $object->setCategory($data['category']);
            unset($data['category']);
        } elseif (array_key_exists('category', $data) && null === $data['category']) {
            $object->setCategory(null);
        }
        if (array_key_exists('message', $data)) {
            $object->setMessage($data['message']);
            unset($data['message']);
        }
        if (array_key_exists('priority', $data) && null !== $data['priority']) {
            $object->setPriority($data['priority']);
            unset($data['priority']);
        } elseif (array_key_exists('priority', $data) && null === $data['priority']) {
            $object->setPriority(null);
        }
        if (array_key_exists('status', $data) && null !== $data['status']) {
            $object->setStatus($data['status']);
            unset($data['status']);
        } elseif (array_key_exists('status', $data) && null === $data['status']) {
            $object->setStatus(null);
        }
        if (array_key_exists('type', $data)) {
            $object->setType($data['type']);
            unset($data['type']);
        }
        if (array_key_exists('datetime_created', $data)) {
            $object->setDatetimeCreated(DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['datetime_created']));
            unset($data['datetime_created']);
        }
        if (array_key_exists('datetime_modified', $data)) {
            $object->setDatetimeModified(DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['datetime_modified']));
            unset($data['datetime_modified']);
        }
        if (array_key_exists('datetime_resolved', $data) && null !== $data['datetime_resolved']) {
            $object->setDatetimeResolved(DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['datetime_resolved']));
            unset($data['datetime_resolved']);
        } elseif (array_key_exists('datetime_resolved', $data) && null === $data['datetime_resolved']) {
            $object->setDatetimeResolved(null);
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
        if (null !== $object->getCategory()) {
            $data['category'] = $object->getCategory();
        }
        if (null !== $object->getMessage()) {
            $data['message'] = $object->getMessage();
        }
        if (null !== $object->getPriority()) {
            $data['priority'] = $object->getPriority();
        }
        if (null !== $object->getStatus()) {
            $data['status'] = $object->getStatus();
        }
        if (null !== $object->getType()) {
            $data['type'] = $object->getType();
        }
        if (null !== $object->getDatetimeCreated()) {
            $data['datetime_created'] = $object->getDatetimeCreated()->format('Y-m-d\\TH:i:sP');
        }
        if (null !== $object->getDatetimeModified()) {
            $data['datetime_modified'] = $object->getDatetimeModified()->format('Y-m-d\\TH:i:sP');
        }
        if (null !== $object->getDatetimeResolved()) {
            $data['datetime_resolved'] = $object->getDatetimeResolved()->format('Y-m-d\\TH:i:sP');
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
        return [GetResourceStringCommentsCommentId200ResponseDataattributes::class => false];
    }
}
