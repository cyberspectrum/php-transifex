<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Normalizer;

use ArrayObject;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\GetTeamMembershipsResponseIncludedItem;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\GetTeamMembershipsTeamMembershipId200Response;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\TeamMembershipsResponseData;
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

class GetTeamMembershipsTeamMembershipId200ResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return GetTeamMembershipsTeamMembershipId200Response::class === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && GetTeamMembershipsTeamMembershipId200Response::class === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new GetTeamMembershipsTeamMembershipId200Response();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (array_key_exists('data', $data)) {
            $object->setData($this->denormalizer->denormalize($data['data'], TeamMembershipsResponseData::class, 'json', $context));
        }
        if (array_key_exists('included', $data)) {
            $values = [];
            foreach ($data['included'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, GetTeamMembershipsResponseIncludedItem::class, 'json', $context);
            }
            $object->setIncluded($values);
        }

        return $object;
    }

    /**
     * @return array|ArrayObject|bool|float|int|string|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if (null !== $object->getData()) {
            $data['data'] = $this->normalizer->normalize($object->getData(), 'json', $context);
        }
        if ($object->isInitialized('included') && null !== $object->getIncluded()) {
            $values = [];
            foreach ($object->getIncluded() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['included'] = $values;
        }

        return $data;
    }

    public function getSupportedTypes(string $format = null): array
    {
        return [GetTeamMembershipsTeamMembershipId200Response::class => false];
    }
}
