<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use App\User;
class GenericRegisterTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testRegistration()
    {
        //browse is the basic command to run a test
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                // test to fill out the registration form
                // each time you run the test a new user is created so
                // you have to change credentials for a sucessfull run
                    
                    ->clickLink('REGISTRATION')
                    ->assertSee('Register')
                    ->assertPathIs('/register')
                    // our selector with id name, email, pass, etc.
                    ->value('#name','Joe10')
                    ->assertInputValue('#name', 'Joe10')
                    ->value('#email','Joe10@Joe.com')
                    ->assertInputValue('#email', 'Joe10@Joe.com')
                    ->value('#password', '123456')
                    ->assertInputValue('#password', '123456')
                    ->value('#password-confirm','123456')
                    ->assertInputValue('#password-confirm', '123456')
                    //->click('button[type="submit"]')
                    ->click('button[type="submit"]')
                    //->assertSee('USER Dashboard')
                    ->assertPathIs('/home');

                    //->assertSee("You are logged in!");
                    //manager
                   $user = User::where('name', 'Joe10');
                   $user->delete();
        });
    }
    public function tearDown()
    {
        $user = User::where('name', 'Joe10');
        $user->delete();
    }
}
