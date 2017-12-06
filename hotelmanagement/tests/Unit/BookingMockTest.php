<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Tests\TestCase;
use Illuminate\Http\Request;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Staff;
use App\User;
use Mockery;


class BookingMockTest extends TestCase
{
    public function testRegisterMock(){ 
        $mock = Mockery::mock(BookingController::class);
        $mock->shouldReceive('registerbooking')->once()->andReturn('/staffhome');
        $request = new Request(
           [ 'first' => 'Test',
            'last' => 'McGee',
            'email' => 'Test@gmail.com',
            'checkin' => '10-10-2010',
            'checkout' => '10-20-2010',
            'payment' => '123', ]
        );
        $this->assertEquals('/staffhome',$mock->registerbooking($request) );
    }

    public function testIndexMock(){ 
        $mock = Mockery::mock(BookingController::class);
        $mock->shouldReceive('index')->once()->andReturn('booking');
        $this->assertEquals('booking',$mock->index() );
    }
    public function tearDown()
    {
        Mockery::close();
    }
}