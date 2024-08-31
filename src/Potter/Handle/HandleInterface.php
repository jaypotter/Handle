<?php

declare(strict_types=1);

namespace Potter\Handle;

interface HandleInterface 
{
    public function getHandle(): object;
    public function hasHandle(): bool;
    public function withHandle(?object $handle = null): static;
    public function withoutHandle(): static;
}
