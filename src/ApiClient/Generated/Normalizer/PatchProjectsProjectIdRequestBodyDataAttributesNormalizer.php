<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Normalizer;

use ArrayObject;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\PatchProjectsProjectIdRequestBodyDataAttributes;
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

class PatchProjectsProjectIdRequestBodyDataAttributesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return PatchProjectsProjectIdRequestBodyDataAttributes::class === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && PatchProjectsProjectIdRequestBodyDataAttributes::class === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new PatchProjectsProjectIdRequestBodyDataAttributes();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (array_key_exists('archived', $data)) {
            $object->setArchived($data['archived']);
        }
        if (array_key_exists('description', $data)) {
            $object->setDescription($data['description']);
        }
        if (array_key_exists('homepage_url', $data)) {
            $object->setHomepageUrl($data['homepage_url']);
        }
        if (array_key_exists('instructions_url', $data)) {
            $object->setInstructionsUrl($data['instructions_url']);
        }
        if (array_key_exists('license', $data)) {
            $object->setLicense($data['license']);
        }
        if (array_key_exists('long_description', $data)) {
            $object->setLongDescription($data['long_description']);
        }
        if (array_key_exists('machine_translation_fillup', $data)) {
            $object->setMachineTranslationFillup($data['machine_translation_fillup']);
        }
        if (array_key_exists('name', $data)) {
            $object->setName($data['name']);
        }
        if (array_key_exists('private', $data)) {
            $object->setPrivate($data['private']);
        }
        if (array_key_exists('repository_url', $data)) {
            $object->setRepositoryUrl($data['repository_url']);
        }
        if (array_key_exists('tags', $data)) {
            $values = [];
            foreach ($data['tags'] as $value) {
                $values[] = $value;
            }
            $object->setTags($values);
        }
        if (array_key_exists('translation_memory_fillup', $data)) {
            $object->setTranslationMemoryFillup($data['translation_memory_fillup']);
        }

        return $object;
    }

    /**
     * @return array|ArrayObject|bool|float|int|string|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if ($object->isInitialized('archived') && null !== $object->getArchived()) {
            $data['archived'] = $object->getArchived();
        }
        if ($object->isInitialized('description') && null !== $object->getDescription()) {
            $data['description'] = $object->getDescription();
        }
        if ($object->isInitialized('homepageUrl') && null !== $object->getHomepageUrl()) {
            $data['homepage_url'] = $object->getHomepageUrl();
        }
        if ($object->isInitialized('instructionsUrl') && null !== $object->getInstructionsUrl()) {
            $data['instructions_url'] = $object->getInstructionsUrl();
        }
        if ($object->isInitialized('license') && null !== $object->getLicense()) {
            $data['license'] = $object->getLicense();
        }
        if ($object->isInitialized('longDescription') && null !== $object->getLongDescription()) {
            $data['long_description'] = $object->getLongDescription();
        }
        if ($object->isInitialized('machineTranslationFillup') && null !== $object->getMachineTranslationFillup()) {
            $data['machine_translation_fillup'] = $object->getMachineTranslationFillup();
        }
        if ($object->isInitialized('name') && null !== $object->getName()) {
            $data['name'] = $object->getName();
        }
        if ($object->isInitialized('private') && null !== $object->getPrivate()) {
            $data['private'] = $object->getPrivate();
        }
        if ($object->isInitialized('repositoryUrl') && null !== $object->getRepositoryUrl()) {
            $data['repository_url'] = $object->getRepositoryUrl();
        }
        if ($object->isInitialized('tags') && null !== $object->getTags()) {
            $values = [];
            foreach ($object->getTags() as $value) {
                $values[] = $value;
            }
            $data['tags'] = $values;
        }
        if ($object->isInitialized('translationMemoryFillup') && null !== $object->getTranslationMemoryFillup()) {
            $data['translation_memory_fillup'] = $object->getTranslationMemoryFillup();
        }

        return $data;
    }

    public function getSupportedTypes(string $format = null): array
    {
        return [PatchProjectsProjectIdRequestBodyDataAttributes::class => false];
    }
}
