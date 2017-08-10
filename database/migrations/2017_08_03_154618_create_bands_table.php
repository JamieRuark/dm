<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBandsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bands', function(Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('formed');
            $table->integer('disbanded');
            $table->string('country');
            $table->string('genre_id');
            $table->string('label');
            $table->integer('popularity');

            $table->integer('media');
            $table->text('history');
            $table->string('discography');
            $table->string('members');

            $table->boolean('active')->default(true);

    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bands');
    }
}
