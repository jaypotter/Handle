# Handle
PHP Handle Interface

```php
public function getHandle(): object;
public function hasHandle(): bool;
protected function setHandle(?object $handle = null): ?object;
protected function unsetHandle(): void;
public function withHandle(?object $handle = null): static;
public function withoutHandle(): static;
