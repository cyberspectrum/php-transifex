<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Normalizer;

use ArrayObject;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\AsyncResponseDataAttributesErrorsItems;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\ResourceTranslationsAsyncUploadsResponseDataAttributes;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\ResourceTranslationsAsyncUploadsResponseDataAttributesDetails;
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

class ResourceTranslationsAsyncUploadsResponseDataAttributesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return ResourceTranslationsAsyncUploadsResponseDataAttributes::class === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && ResourceTranslationsAsyncUploadsResponseDataAttributes::class === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new ResourceTranslationsAsyncUploadsResponseDataAttributes();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (array_key_exists('date_created', $data)) {
            $object->setDateCreated(DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['date_created']));
        }
        if (array_key_exists('date_modified', $data)) {
            $object->setDateModified(DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['date_modified']));
        }
        if (array_key_exists('details', $data) && null !== $data['details']) {
            $object->setDetails($this->denormalizer->denormalize($data['details'], ResourceTranslationsAsyncUploadsResponseDataAttributesDetails::class, 'json', $context));
        } elseif (array_key_exists('details', $data) && null === $data['details']) {
            $object->setDetails(null);
        }
        if (array_key_exists('errors', $data)) {
            $values = [];
            foreach ($data['errors'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, AsyncResponseDataAttributesErrorsItems::class, 'json', $context);
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
        if (null !== $object->getDateCreated()) {
            $data['date_created'] = $object->getDateCreated()->format('Y-m-d\\TH:i:sP');
        }
        if (null !== $object->getDateModified()) {
            $data['date_modified'] = $object->getDateModified()->format('Y-m-d\\TH:i:sP');
        }
        if ($object->isInitialized('details') && null !== $object->getDetails()) {
            $data['details'] = $this->normalizer->normalize($object->getDetails(), 'json', $context);
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
        return [ResourceTranslationsAsyncUploadsResponseDataAttributes::class => false];
    }
}
