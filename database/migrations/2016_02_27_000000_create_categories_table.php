<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {

         
            $table->increments('id');
            $table->string('title');
            $table->string('alias')->nullable();
            $table->integer('parent_id');
            $table->tinyinteger('published');
            $table->string('logo')->nullable();
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
        Schema::drop('categories');
    }
}
