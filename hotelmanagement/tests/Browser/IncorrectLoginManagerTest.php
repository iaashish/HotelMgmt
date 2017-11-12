<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use App\User;

class IncorrectLoginManagerTest extends DuskTestCase
{
    public function testIncorrectManagerLogin()
    {
    $this->browse(function (Browser $browser) {
        $browser->visit('/')
        ->clickLink('Manager Login')
        ->assertPathIs('/login')
        ->value('#email','wrongEmail')
        ->assertInputValue('#email', 'wrongEmail')
        ->value('#password','!@#$%')
        ->assertInputValue('#password', '!@#$%')
        ->press('Login')
        //incorrect login because of invalid email type
        ->assertPathIs('/login');
    });

    }

}