<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserBillingAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_billing_addresses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->unique()->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('province_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->string('name');
            $table->string('street_address');
            $table->string('street_address2')->nullable();
            $table->string('zip_code');
            $table->string('phone');
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
        Schema::dropIfExists('user_billing_addresses');
    }
}
