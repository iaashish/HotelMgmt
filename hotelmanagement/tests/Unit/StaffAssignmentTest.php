<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;
use App\Staff;

class StaffAssignmentTest extends TestCase
{

    use WithoutMiddleware;

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertTrue(true);
    }

    /*
     * Test to register a staff
     *
     *
     */
    public function testStaffAssignment()
    {
       Staff::Create([
            'first'=>'Joe',		
            'last'=>'Schmo',
            'email'=>'Test@gmail.com',	
            'password' => '123456',
            'dob' => '1990-11-14',
            'dateofhire' => '2017-11-14',
            'ssn'=>'4444444',
            'address'=>	'Test',
            'phonenumber'=> '123',
            'staff_type'=> 'accountant'
        ]);

        User::Create(['name' => 'Brennan', 'email' => 'Brennan@gmail.com', 'password' => bcrypt('123456')]);
        
        $credentials = [
            'email' => 'Brennan@gmail.com',
            'password' => '123456'
        ];

        $response = $this->call('POST', '/login', $credentials);
        $response->assertStatus(302);
        $response1 = $this->call('GET', '/managerhome');
        $response1->assertSee('Hotel Management System');
        $credentials2 = [
            'staff_type' => 'Receptionist',
            'staff_name' => 'Joe Schmo',
            'dob'=> '1990-01-01',
            'starttime' => '01:01 AM',
            'endtime' => '10:10 AM'
        ];

        $response2 = $this->call('GET', '/managermange');
        $response2->assertSee('Staff List');
        $response3 = $this->call('POST', '/managermange', $credentials2);
        $response3->assertStatus(302);
    }
}