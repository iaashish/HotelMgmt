<?php

namespace Tests\Unit;


use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class BookingTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertTrue(true);
    }
    public function testAddBooking()
    {


        $guest = factory(\App\Guest::class)->create();
        
        $booking = factory(\App\Booking::class)->create(['email'=> ($guest->email)]);
        //$user->save();
        //$user = factory(User::class, 3)->create(['name' => 'software']);
        $size = Booking::count();
        $newSize = Booking::count();
        //$all = User::all();

        $this->assertEquals(($size + 1), $newSize);
    }
}
