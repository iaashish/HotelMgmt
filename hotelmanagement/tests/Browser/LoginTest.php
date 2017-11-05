<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use App\User;
class LoginTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testLogin()
    {
        // $user = factory(User::class)->create([
        //     // 'name' => 'Joe',
        //     // 'email' => 'Joe@Joe.com',
        //     // 'password' => '123456',
            
        // ]);

        $this->browse(function (Browser $browser) {
            $user = factory(User::class, 1)->create(['name' => 'Joe2'] , 
            ['email' => 'Joe2@Joe.com'] , ['password' => '123456']);
            $browser->visit('/')
                    ->clickLink('Manager Login')
                    ->type('email', 'Joe2@Joe.com')
                    ->type('password', '123456')
                    ->press('Login')
                    ->assertPathIs('/home');
        });
    }
}
