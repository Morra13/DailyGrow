<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sms', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('mailing_id');
            $table->integer('client_id');
            $table->enum('status', ['works', 'stopped', 'finish'])->default('works');
            $table->enum('status_send', ['waiting', 'sent', 'delivered'])->default('waiting');
            $table->date('date_to_send')->nullable();
            $table->date('date_send')->nullable();
            $table->date('date_delivery')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sms');
    }
}
