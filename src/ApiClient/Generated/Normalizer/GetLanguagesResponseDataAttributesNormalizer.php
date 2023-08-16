<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Normalizer;

use ArrayObject;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\GetLanguagesResponseDataAttributes;
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

class GetLanguagesResponseDataAttributesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return GetLanguagesResponseDataAttributes::class === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && GetLanguagesResponseDataAttributes::class === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new GetLanguagesResponseDataAttributes();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (array_key_exists('code', $data)) {
            $object->setCode($data['code']);
        }
        if (array_key_exists('name', $data)) {
            $object->setName($data['name']);
        }
        if (array_key_exists('plural_equation', $data)) {
            $object->setPluralEquation($data['plural_equation']);
        }
        if (array_key_exists('plural_rules', $data)) {
            $values = new ArrayObject([], ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['plural_rules'] as $key => $value) {
                $values[$key] = $value;
            }
            $object->setPluralRules($values);
        }
        if (array_key_exists('rtl', $data)) {
            $object->setRtl($data['rtl']);
        }

        return $object;
    }

    /**
     * @return array|ArrayObject|bool|float|int|string|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if (null !== $object->getCode()) {
            $data['code'] = $object->getCode();
        }
        if (null !== $object->getName()) {
            $data['name'] = $object->getName();
        }
        if (null !== $object->getPluralEquation()) {
            $data['plural_equation'] = $object->getPluralEquation();
        }
        if (null !== $object->getPluralRules()) {
            $values = [];
            foreach ($object->getPluralRules() as $key => $value) {
                $values[$key] = $value;
            }
            $data['plural_rules'] = $values;
        }
        if (null !== $object->getRtl()) {
            $data['rtl'] = $object->getRtl();
        }

        return $data;
    }

    public function getSupportedTypes(string $format = null): array
    {
        return [GetLanguagesResponseDataAttributes::class => false];
    }
}
