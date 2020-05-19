<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            // Attributes
            $table->id();
            $table->string('charge_id')->comment('Can be used to find charge on stripe.');
            // Date can be added for user dashboard, if made.
            // $table->date('date')->comment('Date when the transaction was executed');
            $table->string('name')->comment('Name on card.');
            $table->string('refund_url')->comment('Refund Url of the transaction, pointless unless api is setup for refunds.');
            // Foreign keys
            // ? Create user/admin with id 0 for anonymous donations or make user_id nullable
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('payments');
    }
}
