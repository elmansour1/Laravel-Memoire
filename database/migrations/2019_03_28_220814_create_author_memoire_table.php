<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAuthorMemoireTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('author_memoire', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('author_id')->unsigned();
            $table->bigInteger('memoire_id')->unsigned();
            $table->timestamps();



            $table->foreign('author_id')->references('id')->on('authors')
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
        Schema::dropIfExists('author_memoire');
    }
}
