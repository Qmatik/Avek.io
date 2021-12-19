<?php
declare(strict_types=1);

namespace Database\Factories;

use Faker\Factory;
use Faker\Generator;

abstract class AbstractFactory
{
    public function __construct(protected Factory $factory, protected Generator $faker)
    {
        $this->faker = $this->factory->create();
    }

    public function make(array $substitution = []): array
    {
        return array_merge($substitution, $this->generate());
    }

    abstract public function generate(): array;
}
