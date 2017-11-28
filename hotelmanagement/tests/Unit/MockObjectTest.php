<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\MockObject;
use Mockery;

class MockObjectoTest extends TestCase  {

    public function testMockFunction(){
        $mock = \Mockery::mock('MockObject');
        $mock->shouldReceive('mockFunction')
            ->andReturn('returnSomething');
        $mock->mockFunction();
    }
    public function tearDown()
    {
        Mockery::close();
    }
}