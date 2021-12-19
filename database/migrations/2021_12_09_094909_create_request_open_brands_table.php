<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRequestOpenBrandsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('request_open_brands', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('plan_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->string('name_plan');
            $table->double('price_plan');
            $table->string('grade');
            $table->integer('months');
            $table->string('name');
            $table->string('logo');
            $table->string('commercial_document');
            $table->string('area');
            $table->enum('status',['wating','revision','accepted','refused']);
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
        Schema::dropIfExists('request_open_brands');
    }
}
