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
            'first' =>  $staff->first, 
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
        //go to add staff page
        $response1 = $this->call('GET', '/manageraddstaff');
        //add staff
        $response2 = $this->call('POST', '/registerstaff', $newstaffinfo)
        ->assertRedirect('/managerhome');


        
        //find staff in database so you can get generated id
        $staff2 = Staff::where('email', $staff->email)->first();
        
        //$staff2 = Staff::find();        
        $setRoleParam = [
            'item_id'=> $staff2->id, 
            'role'=> 1];
        
        /*

        $response2 = $this->call('POST', '/setroles', $setRoleParam);

        $id = $staff2->id;
        $name = 'Receptionist';
        //
        $response2 = $this->call('POST', "/deleterole/{{$id}}/$name");
        */
        //task parameters
        $setTaskParam = [
            'staffname'=> $staff2->id, 
            'starttime'=> '15:00:00', 
            'endtime'=> '15:30:00', 
            'task'=>  'Main Office: Review and approve all reconciliation',
        ];


        //Assign task to staff
        $response3 = $this->call('POST', "/tasks", $setTaskParam)
        ->assertRedirect('/managerhome');

        //log manager out
        $response4 = $this->call('POST', "/logout");
        

        //log staff in
        $staffcredentials = [
            'email' => $staff->email,
            'password' => $staff->password,
        ];
        $response = $this->call('POST', 'stafflogin', $staffcredentials);

        $response1 = $this->call('GET','/staffhome');
        
        //assert that the task shows up
        $response1->assertSee( "Main Office: Review and approve all reconciliation");

    }

  
}
