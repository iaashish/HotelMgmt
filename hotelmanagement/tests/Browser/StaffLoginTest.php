<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use App\Staff;

class StaffLoginTest extends DuskTestCase
{
    public function testStaffLogin()
    {
        Staff::create([
            'first'=>'Test',		
            'last'=>'McGee',
            'email'=>'Test@gmail.com',	
            'password' => '123456',
            'dob' => '1990-11-14',
            'dateofhire' => '2017-11-14',
            'ssn'=>'4444444',
            'address'=>	'Test',
            'phonenumber'=> '123',
            'staff_type'=> 'maintenance',
           
        
    ]);
    $this->browse(function (Browser $browser) {
        $browser->visit('/')
        ->clickLink('Staff Login')
        ->assertPathIs('/stafflogin')
        ->value('#email','Test@gmail.com')
        ->assertInputValue('#email', 'Test@gmail.com')
        ->value('#password','123456')
        ->assertInputValue('#password', '123456')
        ->press('Login')
        //incorrect login because of invalid email
        ->assertPathIs('/staffhome')
        ->assertSee('Staff Homepage')
        ->type('first','Guest')
        ->assertInputValue('#first', 'Guest')
        ->type('last','One')
        ->assertInputValue('#last', 'One');
    });

    }

}