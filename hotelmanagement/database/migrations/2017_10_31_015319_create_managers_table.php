<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateManagersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('managers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first');		
            $table->string('last');	
            $table->string('email')->unique();	
            $table->date('dob');
            $table->date('dateofhire');
            $table->integer('ssn');
            $table->string('address', 100);	
            $table->string('phonenumber');	
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
        Schema::dropIfExists('managers');
    }
}
