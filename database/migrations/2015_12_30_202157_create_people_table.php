<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePeopleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('people', function (Blueprint $table) {
            
            $table->increments('id');
            $table->string( 'name' );
            $table->string( 'title')->nullable();
            $table->string( 'desc' )->nullable();
            $table->string( 'moto' )->nullable();
                       
            $table->string('roles'   )->nullable();
            $table->string('accounts')->nullable();                       
            $table->string('photos'  )->nullable();
            $table->string('tags'    )->nullable();
                       
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
        Schema::drop('people');
    }
}
