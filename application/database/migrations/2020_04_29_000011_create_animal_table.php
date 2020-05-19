<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnimalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('animal', function (Blueprint $table) {
            // Attributes
            $table->id();
            $table->string('name')->comment('Name of the animal');
            $table->date('arrival_date')->comment('Date when the animal is included in the application')->useCurrent();
            $table->string('description')->comment('A short description of the animal')->nullable();
            $table->boolean('isDisabled')->default(false)->comment('When an animal is not longer available and should not be displayed.');
            // Foreign keys
            $table->unsignedBigInteger('animal_type_id');
            $table->foreign('animal_type_id')->references('id')->on('animal_type');
            $table->unsignedBigInteger('gender_id');
            $table->foreign('gender_id')->references('id')->on('gender');
            $table->unsignedBigInteger('breed_id');
            $table->foreign('breed_id')->references('id')->on('breed');
            $table->unsignedBigInteger('address_id')->nullable();
            $table->foreign('address_id')->references('id')->on('address');
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
        Schema::dropIfExists('animal');
    }
}
