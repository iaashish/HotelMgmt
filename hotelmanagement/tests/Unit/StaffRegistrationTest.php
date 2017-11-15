<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Staff;
use App\User;



class StaffRegistrationTest extends TestCase
{

    use WithoutMiddleware;

    /**
     * A basic test example.
     *
     * @return void
     */
    // public function testOnlyManagerCanAddStaff()
    // {
        
    //     //make without saving in the database

    //     $response1 = $this->call('GET', '/manageraddstaff');
    //     $response2 = $this->call('POST', '/registerstaff', $newstaffinfo);

    //     $response2->assertSee('Hotel Management System');

    // }

    /*
     * Test to register a staff
     *
     *
     */
    public function testRegisterNewStaff()
    {

        $size = Staff::count();          
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
        $response2 = $this->call('POST', '/registerstaff', $newstaffinfo)

        ->assertRedirect('/managerhome');
        $newSize = Staff::count();
        //staff count should be incremented by 1
		$this->assertEquals(($size + 1), $newSize);
    }

 
}
