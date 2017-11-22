<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Staff;
use App\User;
use Mockery;


class StaffMockTest extends TestCase
{

    public function testStaffMock(){ 

        $mock = Mockery::mock(User::class);
        $mock->shouldReceive([
            'exists' => 'true',
        ]);
        
            
        $mock2 = Mockery::mock('User');
        $mock2->shouldReceive('exists')->once()->andReturn('mocked');

        var_dump($mock->run());
        
        

    }

    public function tearDown()
    {
        Mockery::close();
    }

}