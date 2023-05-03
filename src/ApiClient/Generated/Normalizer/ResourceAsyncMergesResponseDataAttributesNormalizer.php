<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Normalizer;

use ArrayObject;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\ResourceAsyncMergesResponseDataAttributes;
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

class ResourceAsyncMergesResponseDataAttributesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return ResourceAsyncMergesResponseDataAttributes::class === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && ResourceAsyncMergesResponseDataAttributes::class === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new ResourceAsyncMergesResponseDataAttributes();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (array_key_exists('conflict_resolution', $data)) {
            $object->setConflictResolution($data['conflict_resolution']);
        }
        if (array_key_exists('date_completed', $data) && null !== $data['date_completed']) {
            $object->setDateCompleted(DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['date_completed']));
        } elseif (array_key_exists('date_completed', $data) && null === $data['date_completed']) {
            $object->setDateCompleted(null);
        }
        if (array_key_exists('date_created', $data)) {
            $object->setDateCreated(DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['date_created']));
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
        if (null !== $object->getConflictResolution()) {
            $data['conflict_resolution'] = $object->getConflictResolution();
        }
        if (null !== $object->getDateCompleted()) {
            $data['date_completed'] = $object->getDateCompleted()->format('Y-m-d\\TH:i:sP');
        }
        if (null !== $object->getDateCreated()) {
            $data['date_created'] = $object->getDateCreated()->format('Y-m-d\\TH:i:sP');
        }
        if (null !== $object->getStatus()) {
            $data['status'] = $object->getStatus();
        }

        return $data;
    }
}
