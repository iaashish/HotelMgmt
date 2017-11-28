<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Tests\TestCase;
use Illuminate\Http\Request;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Staff;
use App\User;
use Mockery;


class StaffMockTest extends TestCase
{

    public function testHomeMock(){ 
        $mock = Mockery::mock(StaffLoginController::class);
        $mock->shouldReceive('showhomepage')->once()->andReturn('staff.staffhome');
        $this->assertEquals('staff.staffhome',$mock->showhomepage() ); }

    public function testLoginMock(){
        $mock = Mockery::mock(StaffLoginController::class);
        $mock->shouldReceive('showLoginForm')->once()->andReturn('stafflogin');
        $this->assertEquals('stafflogin',$mock->showLoginForm() ); }

    public function testEmailMock () {
        $mock = Mockery::mock(StaffLoginController::class);
        $mock->shouldReceive('email')->once()->andReturn('email');
        $this->assertEquals('email',$mock->email() ); }

    public function testLoginMockTwo () {
        $mock = Mockery::mock(StaffLoginController::class);
        $mock->shouldReceive('login')->once()->andReturn('/staffhome');
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
        $this->assertEquals('/staffhome',$mock->login($request) ); }

    public function testLogoutMock () {
        $mock = Mockery::mock(StaffLoginController::class);
        $mock->shouldReceive('logout')->once()->andReturn('/');
        $this->assertEquals('/',$mock->logout() ); }

    public function tearDown()
    {
        Mockery::close();
    }

}