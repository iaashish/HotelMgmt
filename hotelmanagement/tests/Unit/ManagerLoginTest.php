<?php

namespace Tests\Unit;

use App\Staff;
use App\User;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Support\Facades\Auth;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Session;

class ManagerLoginTest extends TestCase
{
    use DatabaseTransactions;

    /**
     * Wrong authentication test
     *In this i will create a user in the database the pass the invalid credentials it should thrown an 500 error
     * it is kind of acceptance testing so laravel will thrown an 500 error
     * @return void
     */
    public function testInvalidLogin()
    {
        User::Create(['name' => 'hello user', 'email' => 'admin1@admin1.com', 'password' => bcrypt('admin')]);
        $credentials = [
            'email' => 'admin1@admin1.com',
            'password' => 'admin'
        ];
        $response = $this->post('/login', $credentials);
       $response->assertStatus(302);
    }

    /*
     * Valid login credentials
     *
     * In this test case staff will login with his valid credentials it should send and status code of 302
     *
     *@return void
     */

    public function testValidLogin()
    {
        User::Create(['name' => 'hello user', 'email' => 'admin1@admin1.com', 'password' => bcrypt('admin')]);
        $credentials = [
            'email' => 'admin1@admin1.com',
            'password' => 'admin'
        ];
        //sign manager in
        $response = $this->call('POST', '/login', $credentials);
        $response1 = $this->call('GET', '/home');
        $response1->assertSee('Hotel Management System');
    }
}

