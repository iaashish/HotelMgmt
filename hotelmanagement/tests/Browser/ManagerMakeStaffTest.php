<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use App\User;
use App\Staff;
class ManagerMakeStaffTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testManagerMakeStaff()
    {
        // $user = factory(User::class)->create([
        //     // 'name' => 'Joe',
        //     // 'email' => 'Joe@Joe.com',
        //     // 'password' => '123456',
            
        // ]);

        $this->browse(function (Browser $browser) {
            
            $browser->visit('/')
                    ->clickLink('Manager Login')
                    ->type('email', 'Brennan@gmail.com')
                    ->type('password', '123456')
                    ->press('Login')
                    ->assertPathIs('/home')
                    ->clickLink('Staff')
                    ->assertPathIs('/manageraddstaff')
                    // now register a staff and check 
                    // if successful
                    ->value('#first','Joe')
                    ->assertInputValue('#first','Joe')
                    ->value('#last','Schmo')
                    ->assertInputValue('#last', 'Schmo')
                    ->value('#email','JoeSchmo@gmail.com')
                    ->assertInputValue('#email', 'JoeSchmo@gmail.com')
                    ->value('#password','123456')
                    ->assertInputValue('#password', '123456')
                    ->value('#password-confirm','123456')
                    ->assertInputValue('#password-confirm', '123456')
                    ->value('#address','123 Joe Street')
                    ->assertInputValue('#address', '123 Joe Street')
                    ->value('#phonenumber','1-800-SCHMO')
                    ->assertInputValue('#phonenumber', '1-800-SCHMO')
                    ->keys('#dob', '1990-01-01')
                    ->keys('#dateofhire', '2020-01-01')                   
                    ->value('#ssn','4444')
                    ->assertInputValue('#ssn', '4444')
                    ->select('#staff_type', 'Accountant')
                    ->clickLink('Register');
                    //staff should exist and can be deleted from database
                    $staff = Staff::where('first', 'Joe');
                    $staff->delete();
        });
    }
}