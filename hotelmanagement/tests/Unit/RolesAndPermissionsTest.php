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
        $accountant = Mockery::mock('Staff');
        $accountant->setValue($staff_type, 'Accountant');
        $accountant->staff_type = 'Accountant';
        //test to make sure Accountant can only access their page
    }
    public function testReceptionist()
    {
        $receptionist = Mockery::mock('Staff');
        $receptionist->setValue($staff_type, 'Receptionist'); 
        $receptionist->staff_type = 'Receptionist';
        //test to make sure Receptionist can only access their page
    }
    public function testMaintenance()
    {
        $maintenance = Mockery::mock('Staff');
        $maintenance->setValue($staff_type, 'Maintenance'); 
        $receptionist->staff_type = 'Maintenance';
        //test to make sure Maintenance can only access their page
    }
    public function testManager()
    {
        $manager = Mockery::mock('User');
        
        //test to make sure Manager can only access their page
    }
}
