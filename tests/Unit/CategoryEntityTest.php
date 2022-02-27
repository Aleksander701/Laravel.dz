<?php

namespace Tests\Unit;

use App\Models\Category;
use PHPUnit\Framework\TestCase;

class CategoryEntityTest extends TestCase
{
    /**
     *
     * @return array
     */
    public function testEntity ()
    {
        $objects = new Category();
        $data = $objects->getNewsCategory();
        $this->assertIsArray($data);
    }
}