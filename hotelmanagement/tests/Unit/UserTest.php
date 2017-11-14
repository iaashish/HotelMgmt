<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;


class UserTest extends TestCase
{
	public function testAddUsers()
	{

        $size = User::count();
        $user = factory(User::class)->create();
        //$user->save();
		//$user = factory(User::class, 3)->create(['name' => 'software']);
        $newSize = User::count();
		//$all = User::all();

		$this->assertEquals(($size + 1), $newSize);
	}

	public function testLoadSampleUsers()
	{

		$user = factory(User::class, 3)->create(['name' => 'software']);

        $all = User::all();
        $size1 = sizeof($all);
        $size2 = User::count();
    
        $this->assertEquals($size1, $size2);
	}


    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
         $this->assertDatabaseHas('users', [
        'name' => 'software'
    ]);
    }


    public function testDeleteUser()
    {

        $user = User::where('name', 'software');

        $user->delete();

        $this->assertDatabaseMissing('users', ['name' => 'software']);


    }
}
