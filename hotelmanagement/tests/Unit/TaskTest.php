<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Staff;
use App\User;


class TaskTest extends TestCase
{
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
    public function testTaskAssignment()
    {
        //create manager
        User::Create(['name' => 'hello user', 'email' => 'admin1@admin1.com', 'password' => bcrypt('admin')]);
        $credentials = [
            'email' => 'admin1@admin1.com',
            'password' => 'admin'
        ];
        //sign manager in
        $response = $this->call('POST', '/login', $credentials);
        //generate staff
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
        //got to add staff page
        $response1 = $this->call('GET', '/manageraddstaff');
        //add staff
        $response2 = $this->call('POST', '/registerstaff', $newstaffinfo,['HTTP_X-Requested-With' => 'XMLHttpRequest'])
        ->assertStatus(302);  //unprocessable entity

        $staff2 = Staff::find($staff->email);        
        $setRoleParam = [
            'item_id'=> $staff2->id, 
            'role'=> 1];
        

        $response2 = $this->call('POST', '/setroles', $setRoleParam,['HTTP_X-Requested-With' => 'XMLHttpRequest']);

        $id = $staff->id;
        $name = 'Receptionist';
        //
        $response2 = $this->call('POST', "/deleterole/{{1}}/Receptionist", $id, $name, ['HTTP_X-Requested-With' => 'XMLHttpRequest']);
        
        //Assign task to staff



        //log manager out


        //log staff in
        $staffcredentials = [
            'email' => $staff->email,
            'password' => $staff->password,
        ];
        $response = $this->call('POST', 'stafflogin', $staffcredentials);
        //assert that the task shows up
        $response->assertSee('Register');
        

    }
*/
  
}
