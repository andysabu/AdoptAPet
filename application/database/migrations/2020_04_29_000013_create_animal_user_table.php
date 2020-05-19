<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnimalUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('animal_user', function (Blueprint $table) {
            // Attributes
            $table->id();
            $table->boolean('isFoster')->default(false)->comment('An pet can be temporary adopted by someone. This is a fosterer');
            $table->boolean('isSponsor')->default(false)->comment('An pet can be sponsored by someone to cover some expensives');
            $table->date('departure_date')->comment('Date when the animal is given');
            $table->date('arrival_date')->comment('Date when the animal is back and close this register')->nullable();
            // Foreign keys
            $table->foreignId('animal_id')->constrained('animal', 'id');
            $table->foreignId('user_id')->constrained('users', 'id');
            // $table->unsignedBigInteger('user_id');
            // $table->foreign('user_id')->references('id')->on('person');
            // $table->unsignedBigInteger('animal_id');
            // $table->foreign('animal_id')->references('id')->on('animal');
            // Table options
            $table->engine = 'InnoDB';
            $table->charset = 'utf8';
            $table->collation = 'utf8_unicode_ci';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('animal_user');
    }
}
