<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Normalizer;

use ArrayObject;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\PatchResourceStringsRequestBodyDataAttributesStrings;
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

class PatchResourceStringsRequestBodyDataAttributesStringsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return PatchResourceStringsRequestBodyDataAttributesStrings::class === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && PatchResourceStringsRequestBodyDataAttributesStrings::class === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new PatchResourceStringsRequestBodyDataAttributesStrings();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (array_key_exists('few', $data)) {
            $object->setFew($data['few']);
        }
        if (array_key_exists('many', $data)) {
            $object->setMany($data['many']);
        }
        if (array_key_exists('one', $data)) {
            $object->setOne($data['one']);
        }
        if (array_key_exists('other', $data)) {
            $object->setOther($data['other']);
        }
        if (array_key_exists('two', $data)) {
            $object->setTwo($data['two']);
        }
        if (array_key_exists('zero', $data)) {
            $object->setZero($data['zero']);
        }

        return $object;
    }

    /**
     * @return array|ArrayObject|bool|float|int|string|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if ($object->isInitialized('few') && null !== $object->getFew()) {
            $data['few'] = $object->getFew();
        }
        if ($object->isInitialized('many') && null !== $object->getMany()) {
            $data['many'] = $object->getMany();
        }
        if ($object->isInitialized('one') && null !== $object->getOne()) {
            $data['one'] = $object->getOne();
        }
        if (null !== $object->getOther()) {
            $data['other'] = $object->getOther();
        }
        if ($object->isInitialized('two') && null !== $object->getTwo()) {
            $data['two'] = $object->getTwo();
        }
        if ($object->isInitialized('zero') && null !== $object->getZero()) {
            $data['zero'] = $object->getZero();
        }

        return $data;
    }
}
