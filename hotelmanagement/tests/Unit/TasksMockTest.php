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


        public function testShowMock(){ 
            $mock = Mockery::mock(TaskController::class);
            $mock->shouldReceive('show')->once()->andReturn('/managerhome');
            $this->assertEquals('/managerhome',$mock->show() );
        }
        public function testEditMock(){
            $mock = Mockery::mock(TaskController::class);
            $mock->shouldReceive('edit')->once()->andReturn('/managerhome');
            $this->assertEquals('/managerhome',$mock->edit() );
         }
        public function testUpdateMock(){ 
            $mock = Mockery::mock(TaskController::class);
            $mock->shouldReceive('update')->once()->andReturn('/managerhome');
            $this->assertEquals('/managerhome',$mock->update() );

        }
        public function testDestroyMock(){ 
            $mock = Mockery::mock(TaskController::class);
            $mock->shouldReceive('destroy')->once()->andReturn('/managerhome');
            $this->assertEquals('/managerhome',$mock->destroy() );
        }
        public function tearDown()
        {
            Mockery::close();
        }

}