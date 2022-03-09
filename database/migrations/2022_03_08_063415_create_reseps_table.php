<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResepsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reseps', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('recipe_name');
            $table->bigInteger('id_user');
            $table->string('user_name');
            $table->integer('cooking_time');
            $table->string('tag'); 
            $table->string('image')->nullable();
            $table->string('description'); 
            $table->float('rating');
            $table->float('jumlah_rater');
            $table->string('ingredients');
            $table->string('steps');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reseps');
    }
}
