<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Tests\TestCase;
use Illuminate\Http\Request;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Staff;
use App\User;
use Mockery;


class RegistrationMockTest extends TestCase
{
    public function testValidatorMock(){ 
        $mock = Mockery::mock(StaffLoginController::class);
        $mock->shouldReceive('validator')->once()->andReturn('/');
        $request = new Request(
            [
                'name' => 'Test',
                'email' => 'Test@gmail.com',
                'password' => '123456',
            ]
            );
        $this->assertEquals('/',$mock->validator($request) ); }
    
        public function testCreatorMock(){ 
            $mock = Mockery::mock(StaffLoginController::class);
            $mock->shouldReceive('create')->once()->andReturn('/');
            $request = new Request(
                [
                    'name' => 'Test',
                    'email' => 'Test@gmail.com',
                    'password' => '123456',
                ]
                );
            $this->assertEquals('/',$mock->create($request) ); }

            public function tearDown()
            {
                Mockery::close();
            }

    }


