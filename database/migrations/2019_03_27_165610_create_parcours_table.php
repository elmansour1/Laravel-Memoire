<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParcoursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parcours', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('cycle');
            $table->timestamps();
        });

        Schema::table('diplomes',function(Blueprint $table){
            $table->integer('parcour_id')->unsigned()->index();
        });

        Schema::table('specialisations',function(Blueprint $table){
            $table->integer('parcour_id')->unsigned()->index();
        });

        Schema::table('memoires',function(Blueprint $table){
            $table->integer('parcour_id')->unsigned()->index();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('parcours');
    }
}