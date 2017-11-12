<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Foo;
use Mockery;

class MockFooTest extends TestCase  {

    public function testBar(){
        $mock = \Mockery::mock('Foo');
        $mock->shouldReceive('bar')
            ->andReturn('returnSomething');
        $mock->bar();
    }
}