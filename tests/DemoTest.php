<?php

namespace VendorName\Skeleton\Tests;

use Illuminate\Foundation\Testing\RefreshDatabase;

class DemoTest extends TestCase
{
    use RefreshDatabase;

    public function test_package_migrations_run_fine(): void
    {
        $product = \VendorName\Skeleton\Models\Product::factory()->create();

        self::assertEquals(1, $product->id);
    }

    public function test_migrations_loaded_with_loadMigrationsFrom_fails(): void
    {
        $demo = \VendorName\Skeleton\Tests\Fake\Models\Demo::factory()->create();

        self::assertEquals(1, $demo->id);
    }
}