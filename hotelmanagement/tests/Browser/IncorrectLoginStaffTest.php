<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use App\Staff;

class IncorrectLoginStaffTest extends DuskTestCase
{
    public function testStaffLogin()
    {
    $this->browse(function (Browser $browser) {
        $browser->visit('/')
        ->clickLink('Staff Login')
        ->assertPathIs('/stafflogin')
        ->value('#email','wrongEmail')
        ->assertInputValue('#email', 'wrongEmail')
        ->value('#password','!@#$%')
        ->assertInputValue('#password', '!@#$%')
        ->press('Login')
        //incorrect login because of invalid email
        ->assertPathIs('/stafflogin');
    });

    }

}