<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddressTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('address', function (Blueprint $table) {
            // Attributes
            $table->id();
            $table->string('street')->comment('The location of that address');
            $table->string('street_nbr')->comment('The number for that location')->nullable();
            $table->string('house_nbr')->comment('The house for that address')->nullable();
            $table->string('postcode')->comment('The zip for that address');
            $table->string('city')->comment('Main place for that location');
            $table->string('country')->comment('Country for that address');
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
        Schema::dropIfExists('address');
    }
}
