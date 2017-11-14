<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Alterguestandbookingtbl extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        {
            Schema::dropIfExists('guest');
            Schema::dropIfExists('guests');
            Schema::create('guests', function (Blueprint $table) 
            {
                $table->increments('id');
                $table->string('first');
                $table->string('last');
                $table->string('address');
                $table->string('email')->unique();
                $table->integer('happinessLevel')->default(0);
                $table->timestamps();
            });



        }
        //
        // if(Schema::hasTable('booking')){            
        //     Schema::table('booking', function($table) {
        //         $table->dropColumn('first');
        //         $table->dropColumn('last');
        //         $table->dropColumn('email');
        //     });
        // }

        Schema::dropIfExists('booking');
        Schema::create('booking', function(Blueprint $table){
            $table->increments('id');
            $table->string('first');		
            $table->string('last');	
            $table->string('email')->unique();	
            $table->date('checkin');
            $table->date('checkout');
            $table->string('payment');
            $table->timestamps();




            $table->foreign('first')                
            ->references('first')
            ->on('guest')
            ->onDelete('cascade');	

            $table->foreign('last')                
            ->references('last')
            ->on('guest')
            ->onDelete('cascade');	

            $table->foreign('email')                
            ->references('email')
            ->on('guest')
            ->onDelete('cascade');
            
            
        });  
        /*
        Schema::create($tableNames['model_has_roles'], function (Blueprint $table) use ($tableNames) {
            $table->integer('role_id')->unsigned();
            $table->morphs('model');

            $table->foreign('role_id')
                ->references('id')
                ->on($tableNames['roles'])
                ->onDelete('cascade');

            $table->primary(['role_id', 'model_id', 'model_type']);
        });
        */
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        {
            Schema::dropIfExists('guests');
            if(!Schema::hasTable('guest')){
                Schema::create('guest', function (Blueprint $table) {
                    $table->increments('id');
                    $table->string('first');
                    $table->string('last');
                    $table->string('email')->unique();
                    $table->integer('happinessLevel')->default(0);
                    $table->timestamps();
                }
            );
            }

        }
    }
}
