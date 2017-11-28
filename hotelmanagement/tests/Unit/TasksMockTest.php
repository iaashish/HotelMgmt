<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Tests\TestCase;
use Illuminate\Http\Request;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Staff;
use App\User;
use Mockery;


class TasksMockTest extends TestCase
{

    public function testStoreMock(){ 
        $mock = Mockery::mock(TaskController::class);
        $mock->shouldReceive('store')->once()->andReturn('/managerhome');
        $request = new Request(
            
                [
                    'first' => 'Test',
                    'last' => 'McGee',
                    'email' => 'Test@gmail.com',
                    'dob' => '02-13-1990',
                    'dateofhire' => '11-11-2017',
                    'ssn' => '123',
                    'address' => '123',
                    'phonenumber' => '123',
                    'staff_type' => 'Receptionist'
                ]
                
        );

        $this->assertEquals('/managerhome',$mock->store($request) ); }




}