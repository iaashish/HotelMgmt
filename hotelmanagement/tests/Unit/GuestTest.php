<?php

namespace Tests\Unit;
use App\Guest;
use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\RefreshDatabase;

class GuestTest extends TestCase {
    // always use DatabaseTransactions when messing with a DB
    use DatabaseTransactions;
    //use DatabaseMigrations;
// use this: ./vendor/bin/phpunit
/** @test */
/*
    function fetches_happiest_guest() {
        //Given

        $this->assertEquals(3 ,3);
    }
*/
// Be sure to run php artisan tinker
// and then App\Guests::truncate();
// to clear out database
    public function testAddGuest()
    {

        $size = Guest::count();
        $guest = factory(Guest::class)->create();
        //$user->save();
        //$user = factory(User::class, 3)->create(['name' => 'software']);
        $newSize = Guest::count();
        //$all = User::all();

        $this->assertEquals(($size + 1), $newSize);
    }

    public function testLoadSampleGuests()
    {

        $guest = factory(Guest::class, 3)->create(['first' => 'misterguest']);

        $all = Guest::all();
        $size1 = sizeof($all);
        $size2 = Guest::count();

        $this->assertEquals($size1, $size2);
    }


    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertDatabaseHas('guests', [
        'first' => 'misterguest'
    ]);
    }


    public function testDeleteGuest()
    {

        $guest = Guest::where('first', 'misterguest');

        $guest->delete();

        $this->assertDatabaseMissing('guests', ['first' => 'misterguest']);


    }
}