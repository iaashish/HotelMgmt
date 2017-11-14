<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;

class StaffRegistrationTest extends TestCase
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
    public function testRegisterStaff()
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
}
