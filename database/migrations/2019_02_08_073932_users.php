<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Users extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     **/

    public function up()
    {
        Schema::create('users', function(Blueprint $table)
		{
            $table->increments('id');
			$table->string('id_number', 13);
			$table->string('first_name', 30);
			$table->string('last_name', 30);
            $table->timestamps();
            
		}); 
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     **/
    
    public function down()
    {
        Schema::drop('users');
    }
}
