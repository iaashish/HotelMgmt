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
        factory(Staff::class)->create();
        $staff = Staff::first();
        $staffcredentials = [
            'email' => $staff->email,
            'password' => '123456',
        ];
        $response = $this->call('POST', 'stafflogin', $staffcredentials);
        $response->assertStatus(302);
        $response = $this->call('GET', '/staffhome');
        $response->assertSee($staff->email);

    }


    /**
     * In this test case we are testing the invalid password credentials.
     * It has to redirect back to staff login once the authentications is done.
     * @test
     */
    public function testRedirectsBackToFormIfLoginFails()
    {
        factory(Staff::class)->create();
//        $staff = Staff::first();
        $staffcredentials = [
            'email' => 'invalid@invalid.com',
            'password' => '123456',
        ];
        $response = $this->call('POST', '/stafflogin', $staffcredentials);
        $response->assertStatus(302);
        $response = $this->call('get', 'staffhome');
        $response->assertSee('Redirecting to http://localhost:8000');
    }
}
