<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAuthorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('authors', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nom');
            $table->string('matricule')->unique();
            $table->string('email')->unique();
            $table->integer('telephone');
            $table->timestamps();
        });

        // Schema::create('author_memoire', function(Blueprint $table){
        //     $table->increments('id');
        //     $table->integer('author_id');
        //     $table->integer('memoire_id');

        //     $table->foreign('author_id')->references('id')->on('authors')->onDelete('cascade');
        //     $table->foreign('memoire_id')->references('id')->on('memoires')->onDelete('cascade');
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('authors');
    }
}
