<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeams extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teams', function (Blueprint $table) {
		$table->increments('id');
		$table->string('name',255);
		$table->enum('type',['uni','unitech', 'uninature', 'unimed','wsz','wsn','awf']);
		$table->string('city',255)->nullable();
		$table->string('contact_person',255)->nullable();
		$table->string('contact_person_email',255)->nullable();
		$table->string('contact_person_phone',255)->nullable();
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
        Schema::dropIfExists('teams');
    }
}
