<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesAndPermissionsTest extends TestCase
{
    /**
     * 
     *
     * @return void
     */
    public function testAccountant()
    {

        //test to make sure Accountant can only access their page
    }
    public function testReceptionist()
    {

        //test to make sure Receptionist can only access their page
    }
    public function testMaintenance()
    {

        //test to make sure Maintenance can only access their page
    }
    public function testManager()
    {

        //test to make sure Manager can only access their page
    }
}
