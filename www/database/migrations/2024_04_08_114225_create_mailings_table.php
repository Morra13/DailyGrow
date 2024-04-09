<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMailingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mailings', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name');
            $table->string('text');
            $table->json('client_id');
            $table->enum('status', ['works', 'stopped', 'finished'])->default('works');
            $table->enum('start_mailing', ['now', 'automatic', 'regularly']);
            $table->enum('when', ['now']);
            $table->enum('how_often', ['daily']);
            $table->tinyInteger('hour');
            $table->tinyInteger('minute');
            $table->enum('type', ['birthday']);
            $table->enum('segment', ['segment']);
            $table->integer('sent')->nullable();
            $table->integer('delivered')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mailings');
    }
}
