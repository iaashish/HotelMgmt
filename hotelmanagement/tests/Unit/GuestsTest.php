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

    $this->assertEquals(3 ,3);
}

// Be sure to run php artisan tinker
// and then App\Guests::truncate();
// to clear out database

}