<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProvincesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('provinces', function (Blueprint $table) {
            $table->id();
            $table->foreignId('country_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->string('code');
            $table->timestamps();
        });

        Schema::create('province_translations', function (Blueprint $table) {
            $table->increments('id');
            $table->foreignId('province_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->string('locale')->index();
            $table->string('name');
            $table->softDeletes();
            $table->unique(['province_id','locale']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('provinces');
    }
}
