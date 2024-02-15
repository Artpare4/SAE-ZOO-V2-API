<?php

/**
 * @method array getSupportedTypes(?string $format)
 */
class UserDenormalizer implements \Symfony\Component\Serializer\Normalizer\DenormalizerInterface, \Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface
{

    /**
     * @inheritDoc
     */
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = [])
    {
        // TODO: Implement denormalize() method.
    }

    /**
     * @inheritDoc
     */
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null)
    {
        // TODO: Implement supportsDenormalization() method.
    }

    public function __call(string $name, array $arguments)
    {
        // TODO: Implement @method array getSupportedTypes(?string $format)
    }
}