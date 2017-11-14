<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class StaffRegistrationTest extends TestCase
{

    use WithoutMiddleware;

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertTrue(true);
    }

    /*
     * Test to register a staff
     *
     *
     */
    public function testRegisterStaff()
    {
        User::Create(['name' => 'hello user', 'email' => 'admin1@admin1.com', 'password' => bcrypt('admin')]);
        $credentials = [
            'email' => 'admin1@admin1.com',
            'password' => 'admin'
        ];
        $response = $this->call('POST', '/login', $credentials);
        $response->assertStatus(302);
        $response1 = $this->call('GET', '/managerhome');
        $response1->assertSee('Hotel Management System');
    }
}
