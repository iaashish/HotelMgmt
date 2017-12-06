<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Traits\HasRoles;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\RedirectsUsers;
use Illuminate\Support\Facades\Auth;
use Debugbar;
use Illuminate\Support\Facades\DB;
use Mockery;
use App\User;
use App\Staff;

class RolesAndPermissionsTest extends TestCase
{
    use HasRoles;
    
    /**
     * 
     *
     * @return void
     */

    public function testAccountant()
    {
        $staff = factory(Staff::class,1)->create([
                'email' => 'test@gmail.com',
                'password' => '123456',
                'staff_type' => 'Accountant',]);
                
                $logincreds = [
                    'email' => 'test@gmail.com',
                    'password' => '123456'
                    
                ];
                $response = $this->call('GET', '/stafflogin');
                $response = $this->call('POST', '/stafflogin', $logincreds);
                // $response->assertRedirect('/staffhome');
                $response->assertSee('Accountant');
                //test to make sure Accountant can only access their page
    }*/
    /** @test */

/*
    public function testReceptionist()
    {


        $staff = factory(Staff::class,1)->create([       
                    'email' => 'test@gmail.com',
                    'password' => '123456',
                    'staff_type' => 'Receptionist', ]);
                    
                    $logincreds = [
                        
                        'email' => 'test@gmail.com',
                        'password' => '123456'
                      
                    ];

                    $response = $this->call('GET', '/stafflogin');
                    $response = $this->call('POST', '/stafflogin', $logincreds);
                    // $response->assertRedirect('/staffhome');
                    $response->assertSee('Receptionist');
                    //test to make sure Receptionist can only access their page
    }
    */
    /** @test */

    /*
    public function testMaintenance()
    {
        // $maintenance = Mockery::mock('Staff');
        // $maintenance->setValue($staff_type, 'Maintenance'); 
        // $receptionist->staff_type = 'Maintenance';

        $staff = factory(Staff::class,1)->create([       
                    'email' => 'test@gmail.com',
                    'password' => '123456',
                    'staff_type' => 'Maintenance', ]);
                    
                    $logincreds = [
                        
                        'email' => 'test@gmail.com',
                        'password' => '123456'                        
            
                    ];
                    $response = $this->call('GET', '/stafflogin');
                    $response = $this->call('POST', '/stafflogin', $logincreds);
                    // $response->assertRedirect('/staffhome');
                    $response->assertSee('Maintenance');
        //test to make sure Maintenance can only access their page
    }
    */
    /** @test */
    public function testManager()
    {
        //create manager
        User::Create(['name' => 'hello user', 'email' => 'admin1@admin1.com', 'password' => bcrypt('admin')]);
        $credentials = [
            'email' => 'admin1@admin1.com',
            'password' => 'admin'
        ];
        //sign manager in
        $response = $this->call('POST', '/login', $credentials);

        // $response->assertRedirect('/managerhome');
        $response1 = $this->call('GET','/home');
        
        //assert that the task shows up
        $response1->assertSee( "Manage");        //test to make sure Manager can only access their page
    }

//     /** @var \Spatie\Permission\Models\Role */

//     public function testRoleAssignment()
//     {

//         //create manager
//         User::Create(['name' => 'hello user', 'email' => 'admin1@admin1.com', 'password' => bcrypt('admin')]);
//         $credentials = [
//             'email' => 'admin1@admin1.com',
//             'password' => 'admin'
//         ];
//         //sign manager in
//         $response = $this->call('POST', '/login', $credentials);
//         //generate staff
//         $staff = factory(Staff::class)->make();        
//         $newstaffinfo = [
//             'first' =>  $staff->first, 
//             'last' => $staff->last,
//             'email' => $staff->email,
//             'password' => $staff->password,
//             'password_confirmation' => $staff->password,
//             'dob' => $staff->dob,
//             'dateofhire' => $staff->dateofhire,
//             'ssn'=> $staff->ssn,
//             'address'=> $staff->address,
//             'phonenumber'=> $staff->phonenumber,
//             'staff_type' => 'Receptionist'

//         ];
//         //go to add staff page
//         $response1 = $this->call('GET', '/manageraddstaff');
//         //add staff
//         $response2 = $this->call('POST', '/registerstaff', $newstaffinfo)
//         ->assertRedirect('/managerhome');


        
//         //find staff in database so you can get generated id
//         $staff2 = Staff::where('email', $staff->email)->first();
        
//         //$staff2 = Staff::find();        
//         $setRoleParam = [
//             'item_id'=> $staff2->id, 
//             'role'=> 1];
        
        

//         $response2 = $this->call('POST', '/setroles', $setRoleParam);

//         $response3 = $this->call('GET','/managerroles')
//         ->assertSee( $staff->first);
        
// /*
//         $id = $staff2->id;
//         $name = 'Receptionist';
//         //
//         $response2 = $this->call('POST', "/deleterole/{{$id}}/$name");
//         */





//         //log manager out
//         $response4 = $this->call('POST', "/logout");
        

//         //log staff in
//         $staffcredentials = [
//             'email' => $staff->email,
//             'password' => $staff->password,
//         ];
//         $response = $this->call('POST', 'stafflogin', $staffcredentials);

//         $response1 = $this->call('GET','/staffhome')
        
//         //assert there is the ability to reserve room
//         ->assertSee( "Receptionist");

//     }
//     /*
//     public function testRoleDeletion(){

//                //create manager
//                User::Create(['name' => 'hello user', 'email' => 'admin1@admin1.com', 'password' => bcrypt('admin')]);
//                $credentials = [
//                    'email' => 'admin1@admin1.com',
//                    'password' => 'admin'
//                ];
//                //sign manager in
//                $response = $this->call('POST', '/login', $credentials);
//                //generate staff
//                $staff = factory(Staff::class)->make();        
//                $newstaffinfo = [
//                    'first' =>  $staff->first, 
//                    'last' => $staff->last,
//                    'email' => $staff->email,
//                    'password' => $staff->password,
//                    'password_confirmation' => $staff->password,
//                    'dob' => $staff->dob,
//                    'dateofhire' => $staff->dateofhire,
//                    'ssn'=> $staff->ssn,
//                    'address'=> $staff->address,
//                    'phonenumber'=> $staff->phonenumber,
//                    'staff_type' => 'Receptionist'
       
//                ];
//                //go to add staff page
//                $response1 = $this->call('GET', '/manageraddstaff');
//                //add staff
//                $response2 = $this->call('POST', '/registerstaff', $newstaffinfo)
//                ->assertRedirect('/managerhome');
       
       
               
//                //find staff in database so you can get generated id
//                $staff2 = Staff::where('email', $staff->email)->first();
               
//                //$staff2 = Staff::find();        
//                $setRoleParam = [
//                    'item_id'=> $staff2->id, 
//                    'role'=> 1];
               
               
       
//             //    $response2 = $this->call('POST', '/setroles', $setRoleParam);
       
//             //    $id = $staff2->id;
//             //    $name = 'Receptionist';
//             //    //
//             //    $response2 = $this->call('POST', "/deleterole/{{$id}}/$name");
               
       
//         assertEquals(1,1);
//     }
//     */
}
