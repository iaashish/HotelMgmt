<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Staff;


class StaffTest extends TestCase
{
	public function testAddStaffs()
	{

        $size = Staff::count();
        $staff = factory(Staff::class)->create();
        //$staff->save();
		//$staff = factory(Staff::class, 3)->create(['name' => 'software']);
        $newSize = Staff::count();
		//$all = Staff::all();

		$this->assertEquals(($size + 1), $newSize);
	}

	public function testLoadSampleStaffs()
	{

		$staff = factory(Staff::class, 3)->create(['first' => 'Charlize']);

        $all = Staff::all();
        $size1 = sizeof($all);
        $size2 = Staff::count();
    
        $this->assertEquals($size1, $size2);
	}


    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
         $this->assertDatabaseHas('Staff', ['first' => 'Charlize']);
    }


    public function testDeleteStaff()
    {

        $Staff = Staff::where('first', 'Charlize');

        $Staff->delete();

        $this->assertDatabaseMissing('Staff', ['first' => 'Charlize']);


    }
}
