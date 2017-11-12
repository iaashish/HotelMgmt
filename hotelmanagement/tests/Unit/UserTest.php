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
    use DatabaseTransactions;

    /*
     * Test to check if sample users are created
     *
     */
    public function testLoadSampleUsers()
    {
        $user = factory(User::class, 3)->create(['name' => 'software']);

        $all = User::all();

        $this->assertEquals(3, $all->count());
    }

    /*
     * Test to check if the user has been deleted from database
     * this test should fail
     *
     */

//  /*  public function testDeleteUser()
//    {
//        factory(User::class, 3)->create();
//
//        $user = User::find(1);
//
//        $username = $user->name;
//
//        $user->delete();
//
//        $this->assertDatabaseHas('users', [$username]);
//    }*/


    public function testApplication()
    {
        $user = new User(array('name' => 'hello user','email'=>'superadministrator@app.com','password'=>'password'));
        $this->be($user);
        $response = $this->call('GET', 'home');
        $response->assertStatus(200);//200 success

    }
}
