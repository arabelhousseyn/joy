<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRequestOpenBrandPaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('request_open_brand_payments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('request_open_brand_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->string('payment_number');
            $table->enum('type',['F','N']); // O for office and N for online
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
        Schema::dropIfExists('request_open_brand_payments');
    }
}
