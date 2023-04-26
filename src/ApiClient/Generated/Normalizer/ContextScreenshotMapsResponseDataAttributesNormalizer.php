<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Normalizer;

use ArrayObject;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\ContextScreenshotMapsResponseDataAttributes;
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
use function is_int;

class ContextScreenshotMapsResponseDataAttributesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return ContextScreenshotMapsResponseDataAttributes::class === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && ContextScreenshotMapsResponseDataAttributes::class === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new ContextScreenshotMapsResponseDataAttributes();
        if (array_key_exists('coordinate_x', $data) && is_int($data['coordinate_x'])) {
            $data['coordinate_x'] = (float) $data['coordinate_x'];
        }
        if (array_key_exists('coordinate_y', $data) && is_int($data['coordinate_y'])) {
            $data['coordinate_y'] = (float) $data['coordinate_y'];
        }
        if (array_key_exists('height', $data) && is_int($data['height'])) {
            $data['height'] = (float) $data['height'];
        }
        if (array_key_exists('width', $data) && is_int($data['width'])) {
            $data['width'] = (float) $data['width'];
        }
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (array_key_exists('coordinate_x', $data) && null !== $data['coordinate_x']) {
            $object->setCoordinateX($data['coordinate_x']);
        } elseif (array_key_exists('coordinate_x', $data) && null === $data['coordinate_x']) {
            $object->setCoordinateX(null);
        }
        if (array_key_exists('coordinate_y', $data) && null !== $data['coordinate_y']) {
            $object->setCoordinateY($data['coordinate_y']);
        } elseif (array_key_exists('coordinate_y', $data) && null === $data['coordinate_y']) {
            $object->setCoordinateY(null);
        }
        if (array_key_exists('datetime_created', $data)) {
            $object->setDatetimeCreated(DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['datetime_created']));
        }
        if (array_key_exists('datetime_modified', $data)) {
            $object->setDatetimeModified(DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['datetime_modified']));
        }
        if (array_key_exists('height', $data) && null !== $data['height']) {
            $object->setHeight($data['height']);
        } elseif (array_key_exists('height', $data) && null === $data['height']) {
            $object->setHeight(null);
        }
        if (array_key_exists('width', $data) && null !== $data['width']) {
            $object->setWidth($data['width']);
        } elseif (array_key_exists('width', $data) && null === $data['width']) {
            $object->setWidth(null);
        }

        return $object;
    }

    /**
     * @return array|ArrayObject|bool|float|int|string|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if ($object->isInitialized('coordinateX') && null !== $object->getCoordinateX()) {
            $data['coordinate_x'] = $object->getCoordinateX();
        }
        if ($object->isInitialized('coordinateY') && null !== $object->getCoordinateY()) {
            $data['coordinate_y'] = $object->getCoordinateY();
        }
        if (null !== $object->getDatetimeCreated()) {
            $data['datetime_created'] = $object->getDatetimeCreated()->format('Y-m-d\\TH:i:sP');
        }
        if (null !== $object->getDatetimeModified()) {
            $data['datetime_modified'] = $object->getDatetimeModified()->format('Y-m-d\\TH:i:sP');
        }
        if ($object->isInitialized('height') && null !== $object->getHeight()) {
            $data['height'] = $object->getHeight();
        }
        if ($object->isInitialized('width') && null !== $object->getWidth()) {
            $data['width'] = $object->getWidth();
        }

        return $data;
    }
}
