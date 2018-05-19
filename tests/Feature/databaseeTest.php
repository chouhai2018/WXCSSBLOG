<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\blog;

class databaseeTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $users = factory(blog::class, 30)->create(); //在数据库中使用填充器创建30条数据
        $this->assertTrue(true);
    }
}
