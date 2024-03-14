<?php

namespace VendorName\Skeleton\Tests\Fake\database\factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use VendorName\Skeleton\Tests\Fake\Models\Demo;

class DemoFactory extends Factory
{
    protected $model = Demo::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
        ];
    }
}
