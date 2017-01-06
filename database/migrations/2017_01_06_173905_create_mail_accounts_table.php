<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMailAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mail_accounts', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('user_id');
            $table->string('incoming_email');
            $table->string('incoming_password');
            $table->integer('incoming_protocol');
            $table->string('incoming_server');
            $table->integer('incoming_port');
            $table->string('incoming_ssl')->nullable();
            $table->string('outgoing_email');
            $table->string('outgoing_password');
            $table->string('outgoing_server');
            $table->integer('outgoing_port');
            $table->string('outgoing_ssl')->nullable();
            $table->integer('status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mail_accounts');
    }
}
