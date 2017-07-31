<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('logs', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('app_id')->unsigned();
            $table->string('method');
            $table->string('url');
            $table->ipAddress('ip');
            $table->integer('response_code');
            $table->string('processing_time');
            $table->text('request_headers');
            $table->text('request_response');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('logs');
    }
}
