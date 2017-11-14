<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use App\User;
use App\Staff;
class ManagerLoginTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testManagerLogin()
    {
        $user = factory(User::class)->create([
            'name' => 'Brennan',
            'email' => 'Brennan@gmail.com',
            'password' => '123456',
            
        ]);

        $this->browse(function (Browser $browser) {
            
            $browser->visit('/')
                    ->clickLink('Manager Login')
                    ->type('email', 'Brennan@gmail.com')
                    ->type('password', '123456')
                    ->press('Login')
                    ->assertPathIs('/home')
                    ->clickLink('Logout');
                });
            }
        }
        