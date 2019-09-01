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
            $table->string('hostname');
            $table->string('username');
            $table->string('password');
            $table->string('char_database');
            $table->string('port');
            $table->string('realmID');
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
