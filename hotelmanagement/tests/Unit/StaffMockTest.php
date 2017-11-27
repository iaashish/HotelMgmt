<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Staff;
use App\User;
use Mockery;


class StaffMockTest extends TestCase
{

    public function testStaffMock(){ 

        $mock = Mockery::mock(User::class);
        $mock->shouldReceive([
            'exists' => 'true',
        ]);
        
            
        $mock2 = Mockery::mock('User');
        $mock2->shouldReceive('exists')->once()->andReturn('mocked');

        var_dump($mock->exists());
        
        $staff = factory(Staff::class)->create();        
        
                $logincreds = [
                    
                    'email' => $staff->email,
                    'password' => $staff->password,
                    'password_confirmation' => $staff->password,
                    'dob' => $staff->dob,
                    'dateofhire' => $staff->dateofhire,
                    'ssn'=> $staff->ssn,
                    'address'=> $staff->address,
                    'phonenumber'=> $staff->phonenumber,
                    'staff_type' => 'Accountant'
        
                ];
                $response2 = $this->call('POST', '/registerstaff', $newstaffinfo);
        

    }

    public function tearDown()
    {
        Mockery::close();
    }

}