<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Tests\TestCase;
use Illuminate\Http\Request;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Staff;
use App\User;
use Mockery;


class AccountantMockTest extends TestCase
{
    public function testaddSalaryMock(){ 
        $mock = Mockery::mock(AccountantController::class);
        $mock->shouldReceive('addSalary')->once()->andReturn('/staffhome');
        $request = new Request(
           [ 'staff_id' => '123',
            'salary' => '100000', ]
        );

        $this->assertEquals('/staffhome',$mock->addSalary($request) );
    }
    public function tearDown()
    {
        Mockery::close();
    }
}