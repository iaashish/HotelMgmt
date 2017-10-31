<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStaffTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('staff');
        Schema::create('staff', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first');		
            $table->string('last');	
            $table->string('email')->unique();	
            $table->date('dob');
            $table->date('dateofhire');
            $table->integer('ssn');
            $table->string('address', 100);	
            $table->string('phonenumber');	
       //     $table->integer('stafftype_id');
            $table->enum('staff_type', ['manager', 'accountant','maintenance','receptionist']);		
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('staff');
    }

}
