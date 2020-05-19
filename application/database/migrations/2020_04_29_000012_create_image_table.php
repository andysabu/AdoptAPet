<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('image', function (Blueprint $table) {
            // Attributes
            $table->id();
            $table->string('link')->comment('Path where the image can be found');
            $table->string('description')->comment('Details about the picture')->nullable();
            // Foreign keys
            $table->unsignedBigInteger('animal_id');
            $table->foreign('animal_id')->references('id')->on('animal');
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
        Schema::dropIfExists('image');
    }
}
