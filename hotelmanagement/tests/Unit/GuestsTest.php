<?php

namespace Tests\Unit;
use App\Guests;
use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\RefreshDatabase;

class GuestsTest extends TestCase {
    // always use DatabaseTransactions when messing with a DB
    use DatabaseTransactions;
    //use DatabaseMigrations;
// use this: ./vendor/bin/phpunit
/** @test */

function fetches_happiest_guests() {
    //Given
    factory(Guests::class, 20)->create();
    factory(Guests::class)->create(['happinessLevel' => 95]);
    $mostHappy = factory(Guests::class)->create(['happinessLevel' => 100]); 
    //When
    $guests = Guests::happiestGuests();
    //Then
    $this->assertEquals($mostHappy->id, $guests->first()->id);
    // only fetching top 3 in this case
    $this->assertCount(3 , $guests);
}

// Be sure to run php artisan tinker
// and then App\Guests::truncate();
// to clear out database

}