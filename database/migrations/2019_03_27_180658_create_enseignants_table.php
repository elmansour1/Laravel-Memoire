<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEnseignantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enseignants', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nom');
            $table->string('grade');
            $table->timestamps();
        });

        // Schema::create('enseignant_memoire', function(Blueprint $table){
        //     $table->increments('id');

        //     $table->integer('enseignant_id')->unsigned();
        //     $table->integer('memoire_id')->unsigned();
        //     $table->timestamps();

        //     $table->foreign('enseignant_id')->references('id')->on('enseignants')
        //         ->onDelete('cascade')
        //         ->onUpdate('cascade');
        //     $table->foreign('memoire_id')->references('id')->on('memoires')
        //         ->onDelete('cascade')
        //         ->onUpdate('cascade');
        // });

        // Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('enseignants');
    }
}
