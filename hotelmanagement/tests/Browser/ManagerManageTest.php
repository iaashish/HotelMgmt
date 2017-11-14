<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use App\User;
use App\Staff;
class ManagerManageTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testManagerManage()
    {
        // $user = factory(User::class)->create([
        //     // 'name' => 'Joe',
        //     // 'email' => 'Joe@Joe.com',
        //     // 'password' => '123456',
            
        // ]);

        $this->browse(function (Browser $browser) {
            //create a staff to mess with
            $user = factory(Staff::class)->create([
                'first'=>'Test',		
                'last'=>'McGee',
                'email'=>'Test@gmail.com',	
                'dob' => '1990-11-14',
                'dateofhire' => '2017-11-14',
                'ssn'=>'4444444',
                'address'=>	'Test',
                'phonenumber'=> '123',
                'staff_type'=> 'maintenance',
               
            
        ]);
            $browser->visit('/')
                    ->clickLink('Manager Login')
                    ->type('email', 'Brennan@gmail.com')
                    ->type('password', '123456')
                    ->press('Login')
                    ->assertPathIs('/home')
                    //go to the Manage page
                    ->clickLink('Manage')
                    ->visit('/managermange')
                    ->assertPathIs('/managermange')
                    ->select('#staff_type', 'Maintenance')
                    ->select('#staff_name', 'Test McGee')
                    ->keys('#dob', '1990-01-01')
                    ->keys('#start_time', '01:01 AM')
                    ->keys('#start_time', '10:10 AM')
                    >clickLink('Assign task')
                    ->visit('/logout');
                });
            }
        }
        