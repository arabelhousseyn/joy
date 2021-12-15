<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_profiles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->unique()->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->string('username')->unique()->nullable();
            $table->string('fname')->nullable();
            $table->string('lname')->nullable();
            $table->tinyInteger('sexe')->nullable();
            $table->date('dob')->nullable();
            $table->enum('language',['en','fr','ar','am'])->nullable();
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
        Schema::dropIfExists('user_profiles');
    }
}
