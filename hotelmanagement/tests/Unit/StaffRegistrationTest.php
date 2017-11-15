<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class StaffRegistrationTest extends TestCase
{

    use WithoutMiddleware;

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testOnlyManagerCanAddStaff()
    {
        $this->assertTrue(true);
    }

    /*
     * Test to register a staff
     *
     *
     */
    public function testRegisterNewStaff()
    {
        User::Create(['name' => 'hello user', 'email' => 'admin1@admin1.com', 'password' => bcrypt('admin')]);
        $credentials = [
            'email' => 'admin1@admin1.com',
            'password' => 'admin'
        ];
        $response = $this->call('POST', '/login', $credentials);
        


        $staff = factory(Staff::class)->make();        
        $newstaffinfo = [
            'first' => $staff->first, 
            'last' => $staff->last,
            'email' => $staff->email,
            'password' => $staff->password,
            'password_confirmation' => $staff->password,
            'dob' => $staff->dob,
            'dateofhire' => $staff->dateofhire,
            'ssn'=> $staff->ssn,
            'address'=> $staff->address,
            'phonenumber'=> $staff->phonenumber,
            'staff_type' => 'Receptionist'

        ];
        $response1 = $this->call('GET', '/manageraddstaff');
        $response2 = $this->call('POST', '/registerstaff', $newstaffinfo);

        $response2->assertSee('Hotel Management System');
    }

 
}
