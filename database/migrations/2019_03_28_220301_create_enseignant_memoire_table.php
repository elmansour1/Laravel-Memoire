<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEnseignantMemoireTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enseignant_memoire', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->bigInteger('enseignant_id')->unsigned();
            $table->bigInteger('memoire_id')->unsigned();
            $table->timestamps();

             $table->foreign('enseignant_id')->references('id')->on('enseignants')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreign('memoire_id')->references('id')->on('memoires')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('enseignant_memoire');
    }
}
