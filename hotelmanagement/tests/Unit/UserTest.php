<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Http\Response;


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

        $this->assertEquals(3, $all->count());
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
