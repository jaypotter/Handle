<?php

declare(strict_types=1);

namespace Potter\Handle;

trait HandleTrait 
{
    private const string HANDLE = 'handle';
    private object $handle;
    
    final public function getHandle(): object
    {
        return $this->get(self::HANDLE);
    }
    
    final public function hasHandle(): bool
    {
        return $this->has(self::HANDLE);
    }
    
    final protected function setHandle(?object $handle = null): ?object
    {
        if (is_null($handle)) {
            $this->unsetHandle();
            return null;
        }
        return $this->set(self::HANDLE, $handle);
    }
    
    final protected function unsetHandle(): void
    {
        $this->unset(self::HANDLE);
    }
    
    final public function withHandle(?object $handle = null): static
    {
        if (is_null($handle)) {
            return $this->without(self::HANDLE);
        }
        return $this->with(self::HANDLE, $handle);
    }
    
    final public function withoutHandle(): static
    {
        return $this->without(self::HANDLE);
    }
    
    abstract public function get(string $var): mixed;
    abstract public function has(string $var): bool;
    abstract protected function set(string $var, mixed $val): mixed;
    abstract protected function unset(string $var): void;
    abstract public function with(string $var, mixed $val): static;
    abstract public function without(string $var): static;
}
