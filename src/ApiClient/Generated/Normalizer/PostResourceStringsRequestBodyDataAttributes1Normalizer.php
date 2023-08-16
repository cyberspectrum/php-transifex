<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Normalizer;

use ArrayObject;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\PostResourceStringsRequestBodyDataAttributes1;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\ResourceStringsAttributesStrings;
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

class PostResourceStringsRequestBodyDataAttributes1Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return PostResourceStringsRequestBodyDataAttributes1::class === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && PostResourceStringsRequestBodyDataAttributes1::class === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new PostResourceStringsRequestBodyDataAttributes1();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (array_key_exists('appearance_order', $data) && null !== $data['appearance_order']) {
            $object->setAppearanceOrder($data['appearance_order']);
        } elseif (array_key_exists('appearance_order', $data) && null === $data['appearance_order']) {
            $object->setAppearanceOrder(null);
        }
        if (array_key_exists('character_limit', $data) && null !== $data['character_limit']) {
            $object->setCharacterLimit($data['character_limit']);
        } elseif (array_key_exists('character_limit', $data) && null === $data['character_limit']) {
            $object->setCharacterLimit(null);
        }
        if (array_key_exists('context', $data)) {
            $object->setContext($data['context']);
        }
        if (array_key_exists('developer_comment', $data) && null !== $data['developer_comment']) {
            $object->setDeveloperComment($data['developer_comment']);
        } elseif (array_key_exists('developer_comment', $data) && null === $data['developer_comment']) {
            $object->setDeveloperComment(null);
        }
        if (array_key_exists('instructions', $data) && null !== $data['instructions']) {
            $object->setInstructions($data['instructions']);
        } elseif (array_key_exists('instructions', $data) && null === $data['instructions']) {
            $object->setInstructions(null);
        }
        if (array_key_exists('key', $data)) {
            $object->setKey($data['key']);
        }
        if (array_key_exists('occurrences', $data) && null !== $data['occurrences']) {
            $object->setOccurrences($data['occurrences']);
        } elseif (array_key_exists('occurrences', $data) && null === $data['occurrences']) {
            $object->setOccurrences(null);
        }
        if (array_key_exists('pluralized', $data)) {
            $object->setPluralized($data['pluralized']);
        }
        if (array_key_exists('strings', $data)) {
            $object->setStrings($this->denormalizer->denormalize($data['strings'], ResourceStringsAttributesStrings::class, 'json', $context));
        }
        if (array_key_exists('tags', $data)) {
            $values = [];
            foreach ($data['tags'] as $value) {
                $values[] = $value;
            }
            $object->setTags($values);
        }

        return $object;
    }

    /**
     * @return array|ArrayObject|bool|float|int|string|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if ($object->isInitialized('appearanceOrder') && null !== $object->getAppearanceOrder()) {
            $data['appearance_order'] = $object->getAppearanceOrder();
        }
        if ($object->isInitialized('characterLimit') && null !== $object->getCharacterLimit()) {
            $data['character_limit'] = $object->getCharacterLimit();
        }
        if (null !== $object->getContext()) {
            $data['context'] = $object->getContext();
        }
        if ($object->isInitialized('developerComment') && null !== $object->getDeveloperComment()) {
            $data['developer_comment'] = $object->getDeveloperComment();
        }
        if ($object->isInitialized('instructions') && null !== $object->getInstructions()) {
            $data['instructions'] = $object->getInstructions();
        }
        if (null !== $object->getKey()) {
            $data['key'] = $object->getKey();
        }
        if ($object->isInitialized('occurrences') && null !== $object->getOccurrences()) {
            $data['occurrences'] = $object->getOccurrences();
        }
        if ($object->isInitialized('pluralized') && null !== $object->getPluralized()) {
            $data['pluralized'] = $object->getPluralized();
        }
        if (null !== $object->getStrings()) {
            $data['strings'] = $this->normalizer->normalize($object->getStrings(), 'json', $context);
        }
        if ($object->isInitialized('tags') && null !== $object->getTags()) {
            $values = [];
            foreach ($object->getTags() as $value) {
                $values[] = $value;
            }
            $data['tags'] = $values;
        }

        return $data;
    }

    public function getSupportedTypes(string $format = null): array
    {
        return [PostResourceStringsRequestBodyDataAttributes1::class => false];
    }
}
