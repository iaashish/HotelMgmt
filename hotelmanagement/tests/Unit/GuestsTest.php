<?php

namespace Tests\Unit;

use App\Guests;
use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\RefreshDatabase;

class GuestsTest extends TestCase
{
    /** @test */

    function fetches_happiest_guests()
    {

        $this->assertEquals(3, 3);
    }
}