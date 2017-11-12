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
    $this->browse(function (Browser $browser) {
        $browser->visit('/')
        ->clickLink('Staff Login')
        ->assertPathIs('/stafflogin')
        ->value('#email','staff1@gmail.com')
        ->assertInputValue('#email', 'staff1@gmail.com')
        ->value('#password','123456')
        ->assertInputValue('#password', '123456')
        ->press('Login')
        //incorrect login because of invalid email
        ->assertPathIs('/staffhome')
        ->assertSee('Staff Homepage');
    });

    }

}