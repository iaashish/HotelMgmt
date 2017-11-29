<?php

namespace Tests\Unit;

use App\Http\Controllers\manager\ManagerController;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Tests\TestCase;
use Illuminate\Http\Request;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Staff;
use App\User;
use Mockery;
use App\Http\Controllers\Auth\RegisterController;


class ManagerMockTest extends TestCase
{


    /*
     * Mock the positive scenerio of deleted role
     *
     */
    public function testDeleteRoleMock()
    {
        $mock = Mockery::mock(ManagerController::class);
        $mock->shouldReceive('deleteRole')->once()->andReturn('deleted');
        $id = 105;
        $name = 'Receptionist';
        $this->assertEquals('deleted', $mock->deleteRole($id, $name));
    }

    public function testDeleteNotpresentRole()
    {
        $mock = Mockery::mock(ManagerController::class);
        $mock->shouldReceive('deleteRole')->once()->andReturn('deleted');
        $id = 20;
        $name = 'Receptionist';
        $this->assertEquals('deleted', $mock->deleteRole($id, $name));
    }

    /*
     * Mock the change dropdown function
     *
     */
    public function testChangeDropDown()
    {
        $mock = Mockery::mock(ManagerController::class);
        $mock->shouldReceive('changeDropDown')->once()->andReturn('changed');
        $id = 20;
        $name = 'Receptionist';
        $this->assertEquals('changed', $mock->changeDropDown($id, $name));
    }

    public function testAssignRole()
    {
        $mock = Mockery::mock(ManagerController::class);
        $mock->shouldReceive('assignRole')->once()->andReturn('assigned');
        $request = new Request(['item_id' => 1, 'role' => 'Receptionist']);
        $this->assertEquals('assigned', $mock->assignRole($request));
    }

    public function tearDown()
    {
        Mockery::close();
    }

}