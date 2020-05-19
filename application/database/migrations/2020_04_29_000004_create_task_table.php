<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTaskTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('task', function (Blueprint $table) {
            // Attributes
            $table->id();
            $table->string('name')->comment('Name of the task');
            $table->string('description')->comment('Description of the task')->nullable();
            $table->date('start_date')->comment('Date when the task is available')->nullable();
            $table->date('end_date')->comment('Date when the task is closed and not longer available')->nullable();
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
        Schema::dropIfExists('task');
    }
}
