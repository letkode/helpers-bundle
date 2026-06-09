<?php

declare(strict_types=1);

namespace Letkode\HelpersBundle\Array;

use Letkode\HelpersBundle\Contract\ArrayHelperInterface;
use Letkode\HelpersBundle\Exception\InvalidConfigurationException;

/**
 * Splits an array into chunks of a fixed size.
 */
final readonly class ChunkHelper implements ArrayHelperInterface
{
    public function __construct(
        private int $size = 100,
        private bool $preserveKeys = false,
    ) {
        if ($size < 1) {
            throw InvalidConfigurationException::forDetail('size must be at least 1');
        }
    }

    /**
     * @param array<mixed>         $array
     * @param array<string, mixed> $parameters unused
     *
     * @return list<array<mixed>>
     */
    public function handle(array $array, array $parameters = []): array
    {
        return array_chunk($array, max(1, $this->size), $this->preserveKeys);
    }
}
