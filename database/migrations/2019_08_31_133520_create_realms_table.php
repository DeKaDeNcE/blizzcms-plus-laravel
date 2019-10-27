<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRealmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('realms', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('realm_name');
            $table->string('hostname');
            $table->string('port');
            $table->string('username');
            $table->string('password');
            $table->string('char_database');
            $table->string('world_database');
            $table->string('console_hostname');
            $table->string('console_username');
            $table->string('console_password');
            $table->string('console_port');
            $table->string('emulator');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('realms');
    }
}
