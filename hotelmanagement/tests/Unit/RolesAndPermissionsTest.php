<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Mockery;
use App\User;
use App\Staff;

class RolesAndPermissionsTest extends TestCase
{
    /**
     * 
     *
     * @return void
     */
    /** @test */
    public function testAccountant()
    {
        // $accountant = Mockery::mock('Staff');
        // $accountant->setValue($staff_type, 'Accountant');
        // $accountant->staff_type = 'Accountant';
        
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
    }
    /** @test */
    public function testReceptionist()
    {
        // $receptionist = Mockery::mock('Staff');
        // $receptionist->setValue($staff_type, 'Receptionist'); 
        // $receptionist->staff_type = 'Receptionist';

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
    /** @test */
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
    /** @test */
    public function testManager()
    {
        // $manager = Mockery::mock('User');
        
        $manager = factory(User::class,1)->create([
            'email' => 'test@gmail.com',
            'password' => '123456',
        ]);
                    
                    $logincreds = [
                        
                        'email' => $manager->email,
                        'password' => $manager->password,
                        
                    ];
                    $response = $this->call('GET', '/managerlogin');
                    $response = $this->call('POST', '/managerlogin', $logincreds);
                    // $response->assertRedirect('/managerhome');
                    $response->assertSee('Manager');
        //test to make sure Manager can only access their page
    }
}
