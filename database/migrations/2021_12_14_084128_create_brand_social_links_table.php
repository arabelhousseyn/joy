<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBrandSocialLinksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('brand_social_links', function (Blueprint $table) {
            $table->id();
            $table->foreignId('brand_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->string('link');
            $table->enum('type',['F','S','Y','W','O']); // F for facebook , S for instagram , Y for youtube , W for twitter , O for other
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
        Schema::dropIfExists('brand_social_links');
    }
}
