<?php

declare(strict_types=1);

namespace Potter\Handle;

abstract class AbstractHandle 
{
    abstract public function getHandle(): object;
    abstract public function hasHandle(): bool;
    abstract protected function setHandle(?object $handle = null): ?object;
    abstract protected function unsetHandle(): void;
    abstract public function withHandle(?object $handle = null): static;
    abstract public function withoutHandle(): static;
}
