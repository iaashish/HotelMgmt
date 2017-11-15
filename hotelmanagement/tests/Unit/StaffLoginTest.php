<?php

namespace Tests\Unit;

use App\Staff;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\StaffLoginController;
use Illuminate\Http\Request;

class StaffLoginTest extends TestCase
{


    /**
     * Navigate to staff login page
     */

    public function testNavigateToStaffLogin()
    {
        $response = $this->call('GET', 'login');
        $this->assertTrue($response->isOk());
    }

    /**
     * Navigate to staff login page if not staff not logged in
     *
     * @return void
     */
    public function testStaffHomeIfNotLoggedIn()
    {
        $request = $this->call('GET', '/staffhome');
        $request->assertStatus(302);//302 redirect
        $request->assertRedirect('/stafflogin');
    }

    /**
     * Navigate to staff home page after login
     *
     * @return void
     */
    public function testNavigateToStaffHomeAfterLogin()
    {
        $user = factory(Staff::class, 1)->create(['email' => 'software2@gmail.com']);
        $response = $this->call('POST', '/stafflogin', [
            'email' => 'software2@gmail.com',
            'password' => '123456',
        ]);
        $response->assertSee('>Redirecting to http://localhost:8000');
        $response = $this->call('get', '/staffhome');
        $response->assertSee('Staff Homepage');

    }


    /**
     * In this test case we are testing the invalid password credentials.
     * It has to redirect back to staff login once the authentications is done.
     * @test
     */
    public function testRedirectsBackToFormIfLoginFails()
    {
        $user = factory(Staff::class, 1)->create(['email' => 'software@gmail.com']);
        $requestCredentials = ['email' => 'software@gmail.com', 'password' => '12345655'];
        $response = $this->call('POST', '/stafflogin', $requestCredentials);
        $response->assertSee('>Redirecting to http://localhost:8000');
        $response = $this->call('get', 'staffhome');
        $response->assertSee('Redirecting to http://localhost:8000/stafflogin');
    }
}
