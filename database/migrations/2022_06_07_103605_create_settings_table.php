<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('title_tr')->nullable();
            $table->string('title_en')->nullable();
            $table->string('adress')->nullable();
            $table->string('instagram')->nullable();
            $table->string('facebook')->nullable();
            $table->string('twitter')->nullable();
            $table->string('whatsapp')->nullable();
            $table->text('mapframe')->nullable();
            $table->string('logo')->nullable();
            $table->string('icon')->nullable();
            $table->string('homepagemiddleText_tr')->nullable();
            $table->string('homepagemiddleText_en')->nullable();
            $table->string('homepageLongText_tr')->nullable();
            $table->string('homepageLongText_en')->nullable();
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
        Schema::dropIfExists('settings');
    }
};
