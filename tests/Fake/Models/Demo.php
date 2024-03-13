<?php

namespace VendorName\Skeleton\Tests\Fake\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use VendorName\Skeleton\Tests\Fake\database\factories\DemoFactory;

class Demo extends Model
{
    use HasFactory;

    protected static function newFactory(): DemoFactory
    {
        return new DemoFactory();
    }
}
