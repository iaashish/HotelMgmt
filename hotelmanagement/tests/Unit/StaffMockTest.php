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

    

    public function testHomeMock(){ 

        $mock = Mockery::mock(StaffLoginController::class);
        $mock->shouldReceive('showhomepage')->once()->andReturn('staff.staffhome');
        $this->assertEquals('staff.staffhome',$mock->showhomepage() );

    }

    public function testLoginMock(){
        $mock = Mockery::mock(StaffLoginController::class);
        $mock->shouldReceive('showLoginForm')->once()->andReturn('stafflogin');
        $this->assertEquals('stafflogin',$mock->showLoginForm() ); }

    public function testEmail () {
        $mock = Mockery::mock(StaffLoginController::class);
        $mock->shouldReceive('email')->once()->andReturn('email');
        $this->assertEquals('email',$mock->email() ); }

    public function testLogin () {
        $mock = Mockery::mock(StaffLoginController::class);
        $mock->shouldReceive('login')->once()->andReturn('/staffhome');
        $this->assertEquals('/staffhome',$mock->login() ); }

        public function testLogout () {
            $mock = Mockery::mock(StaffLoginController::class);
            $mock->shouldReceive('logout')->once()->andReturn('/');
            $this->assertEquals('/',$mock->logout() ); }

    public function tearDown()
    {
        Mockery::close();
    }

}