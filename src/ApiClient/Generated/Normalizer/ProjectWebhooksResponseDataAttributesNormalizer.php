<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Normalizer;

use ArrayObject;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\ProjectWebhooksResponseDataAttributes;
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

class ProjectWebhooksResponseDataAttributesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return ProjectWebhooksResponseDataAttributes::class === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && ProjectWebhooksResponseDataAttributes::class === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new ProjectWebhooksResponseDataAttributes();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (array_key_exists('active', $data)) {
            $object->setActive($data['active']);
        }
        if (array_key_exists('callback_url', $data)) {
            $object->setCallbackUrl($data['callback_url']);
        }
        if (array_key_exists('datetime_created', $data) && null !== $data['datetime_created']) {
            $object->setDatetimeCreated(DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['datetime_created']));
        } elseif (array_key_exists('datetime_created', $data) && null === $data['datetime_created']) {
            $object->setDatetimeCreated(null);
        }
        if (array_key_exists('datetime_modified', $data) && null !== $data['datetime_modified']) {
            $object->setDatetimeModified(DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['datetime_modified']));
        } elseif (array_key_exists('datetime_modified', $data) && null === $data['datetime_modified']) {
            $object->setDatetimeModified(null);
        }
        if (array_key_exists('event_type', $data)) {
            $object->setEventType($data['event_type']);
        }
        if (array_key_exists('secret_key', $data)) {
            $object->setSecretKey($data['secret_key']);
        }

        return $object;
    }

    /**
     * @return array|ArrayObject|bool|float|int|string|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if (null !== $object->getActive()) {
            $data['active'] = $object->getActive();
        }
        if (null !== $object->getCallbackUrl()) {
            $data['callback_url'] = $object->getCallbackUrl();
        }
        if (null !== $object->getDatetimeCreated()) {
            $data['datetime_created'] = $object->getDatetimeCreated()->format('Y-m-d\\TH:i:sP');
        }
        if (null !== $object->getDatetimeModified()) {
            $data['datetime_modified'] = $object->getDatetimeModified()->format('Y-m-d\\TH:i:sP');
        }
        if (null !== $object->getEventType()) {
            $data['event_type'] = $object->getEventType();
        }
        if (null !== $object->getSecretKey()) {
            $data['secret_key'] = $object->getSecretKey();
        }

        return $data;
    }
}
