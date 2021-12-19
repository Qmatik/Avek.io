<?php
declare(strict_types=1);

namespace Database\Factories;

class UsersFactory extends AbstractFactory
{
    public function generate(): array
    {
        return [
            'name' => $this->faker->name,
            'email' => $this->faker->unique->email,
            'is_active' => $this->faker->boolean,
            'password' => $this->faker->password,
            'remember_token' => $this->faker->password,
        ];
    }
}
