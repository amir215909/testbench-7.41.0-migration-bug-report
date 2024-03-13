<?php

it('test_package_migrations_run_fine', function () {
    $product = \VendorName\Skeleton\Models\Product::factory()->create();

    expect($product->id)->toBe(1);
});

it('test_migrations_loaded_with_loadMigrationsFrom_fails', function () {
    $demo = \VendorName\Skeleton\Tests\Fake\Models\Demo::factory()->create();

    expect($demo->id)->toBe(1);
});
