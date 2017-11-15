<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use App\User;
use App\Booking;

class BookingPageTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testBookingLogin()
    {
        $user = factory(User::class)->create([
        //     // 'name' => 'Joe',
        //     // 'email' => 'Joe@Joe.com',
        //     // 'password' => '123456',
            
         ]);

            $this->browse(function (Browser $browser) {

                $browser->visit('/')
                    ->clickLink('Manager Login')
                    ->type('email', 'Brennan@gmail.com')
                    ->type('password', '123456')
                    ->press('Login')
                    ->assertPathIs('/home')
                    ->visit('/booking')
                    ->assertPathIs('/booking')
                    ->keys('#checkin', '1990-01-01')
                    ->keys('#checkout', '2020-01-01')
                    ->value('#first', 'Joe')
                    ->value('#last', 'Henderson')
                    ->value('#email', 'Joe@gmail.com')
                    ->click('button[type="submit"]')
                    ->assertPathIs('/registerbooking');
                $booking = Booking::where('first', 'Joe');
                $booking->delete();
            })]);
    }
}