<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use App\User;
use App\Staff;

class ManagerRolesTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testManagerRoles()
    {

        $this->browse(function (Browser $browser) {

            
            $user = factory(User::class)->create(
                ['name' => 'Brennan'], 
                ['email' => 'Brennan@Joe.com'], 
                ['password' => '123456']
            );

            $browser->visit('/login')
                    
                    ->type('email', 'Brennan@gmail.com')
                    ->type('password', '123456')
                    ->press('Login')
                    ->assertPathIs('/managerhome')
                    ->clickLink('/managerroles');
                    
                    
                    $user->delete();
                });
    }
}

