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
        ->clickLink('/stafflogin')
        ->assertSee('staff  Login Page')
        ->assertPathIs('/stafflogin')
        ->value('#email','wrongEmail')
        ->assertInputValue('#emai', 'wrongEmail')
        ->value('#password','!@#$%')
        ->assertInputValue('#password', '!@#$%')
        ->press('Login')
        ->assertSee("Please include an '@' in the email address. wrongEmail is missing an '@'.");
    });

    }

}