<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ManagerControllerTest extends TestCase
{
    /**
     *@test
     */
    public function Redirect_ifNotPermitted()
    {
        $this->call("GET","/managerhome")
          ->assertSee("login")
          ->assertRedirect("/login");
    }
        /**
     *@test
     */
    public function Showmemangerpageifauthenticated()
    {
        $this->call('Post',"/login",["email"=>"admin1@admin.com","password"=>"administrator"]);
        $this->call("GET","/managerhome")
          ->assertSee("staff");
    }
}
