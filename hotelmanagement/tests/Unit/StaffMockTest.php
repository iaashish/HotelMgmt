<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Staff;
use App\User;
use App\MockObject;
use Mockery;


class StaffMockTest extends TestCase
{

    public function testStaffMock(){ 

        $double = Mockery::mock(Staff::class);
        $double->allows()->find(scopestafftype)->andReturns('name');
        $staff = $double->find(scopestafftype);
        

    }

    public function tearDown()
    {
        Mockery::close();
    }

}