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

    public function testInvalidRegistratinInfo()
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
            'first' => '', 
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
        $response2 = $this->call('POST', '/registerstaff', $newstaffinfo,['HTTP_X-Requested-With' => 'XMLHttpRequest'])
        ->assertStatus(302);
        
       //->assertSee('The first field is required');
        $newSize = Staff::count();
        //staff count should not be incremented by 1
		$this->assertEquals($size, $newSize);
    }
    /*
     * Test to register a staff
     *
     *
     */
    public function testRegisterNewStaff()
    {
        User::Create(['name' => 'Brennan', 'email' => 'Brennan@gmail.com', 'password' => bcrypt('123456')]);
        $credentials = [
            'email' => 'Brennan@gmail.com',
            'password' => '123456'
        ];
        $response = $this->call('POST', '/login', $credentials);
        //$response->assertStatus(302);
        $response1 = $this->call('GET', '/managerhome');
        $response1->assertSee('Hotel Management System');
        // go to create staff page and make a staff
        $response2 = $this->call('GET', '/manageraddstaff');
        $response2->assertSee('Register');
        // credentials for staff
        $credentials2 = [
            '#first'=>'Joe',
            '#last'=>'Schmo',
            '#email'=>'JoeSchmo@gmail.com',
            '#password'=>'123456',
            '#password-confirm'=>'123456',
            '#address'=>'123 Joe Street',
            '#phonenumber'=>'1-800-SCHMO',
            '#dob'=> '1990-01-01',
            '#dateofhire'=>'2020-01-01',                 
            '#ssn'=>'4444',
            '#staff_type'=>'Accountant'
        ];
        $response3 = $this->call('POST', '/manageraddstaff', $credentials2);
        //$response3->assertStatus(302);
    }

    public function testStaffRegFactory(){


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
