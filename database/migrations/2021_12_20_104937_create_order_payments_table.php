<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderPaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_payments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('order_id')->unique()->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->enum('type',['office','online']);
            $table->string('receipt')->nullable();
            $table->string('card_name')->nullable();
            $table->string('card_number')->nullable();
            $table->unsignedInteger('exp_month')->nullable();
            $table->unsignedBigInteger('exp_year')->nullable();
            $table->unsignedBigInteger('cvv')->nullable();
            $table->string('card_type')->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('order_payments');
    }
}
