<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use App\Staff;

class IncorrectLoginStaffTest extends DuskTestCase
{
    public function testIncorrectStaffLogin()
    {
    $this->browse(function (Browser $browser) {
        $browser->visit('/')

        //testing with empty fields
        ->clickLink('Staff Login')
        ->assertPathIs('/stafflogin')
        ->value('#email','')
        ->assertInputValue('#email', '')
        ->value('#password','')
        ->assertInputValue('#password', '')
        ->press('Login')
        //error pops up because of empty fields
        ->assertPathIs('/stafflogin')

        //testing with incorrect email syntax
        ->value('#email','wrongEmail')
        ->assertInputValue('#email', 'wrongEmail')
        ->value('#password','123456')
        ->assertInputValue('#password', '123456')
        ->press('Login')
        //error pops up because of invalid email syntax
        ->assertPathIs('/stafflogin')

        //testing with incorrect password syntax
        ->value('#email','Brennan@gmail.com')
        ->assertInputValue('#email', 'Brennan@gmail.com')
        ->value('#password','!@#$%^')
        ->assertInputValue('#password', '!@#$%^')
        ->press('Login')
        //error pops up because of invalid password syntax
        ->assertPathIs('/stafflogin');
    });

    }

}