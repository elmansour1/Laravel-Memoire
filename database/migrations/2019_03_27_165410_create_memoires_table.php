<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMemoiresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('memoires', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('titre');
            $table->string('mots_cle');
            $table->string('resume');
            $table->string('abstract');
            $table->string('document');
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
        Schema::dropIfExists('memoires');
    }
}
