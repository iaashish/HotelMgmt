<?php

namespace Tests\Unit;

use App\Staff;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class StaffTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testCreateStaff()
    {
        factory(Staff::class, 2)->create();
        $staff = Staff::all();
        $this->assertEquals(2, $staff->count());
    }
}
