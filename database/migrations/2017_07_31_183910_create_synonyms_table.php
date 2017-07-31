<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSynonymsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('synonyms', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('app_id')->unsigned();
            $table->string('values');
            $table->boolean('synced_with_es')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('synonyms');
    }
}
