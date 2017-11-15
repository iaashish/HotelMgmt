<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Admin;


class AdminTest extends TestCase
{
	public function testAddAdmins()
	{

        $size = Admin::count();
        $admin = factory(Admin::class)->create();
        $newSize = Admin::count();
		$this->assertEquals(($size + 1), $newSize);
	}

	public function testLoadSampleAdmins()
	{

		$admin = factory(Admin::class, 3)->create(['name' => 'software']);
		$all = Admin::all();
		$this->assertEquals($all, $all);
	}


    public function testDeleteAdmin()
    {

        $admin = Admin::where('name', 'software');
        $admin->delete();
        $this->assertDatabaseMissing('Admins', ['name' => 'software']);

    }
}
