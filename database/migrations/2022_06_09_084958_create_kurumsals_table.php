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
        Schema::create('kurumsals', function (Blueprint $table) {
            $table->id();
            $table->text('hakkimizda_tr')->nullable();
            $table->text('hakkimizda_en')->nullable();
            $table->text('misyon_tr')->nullable();
            $table->text('misyon_en')->nullable();
            $table->text('vizyon_tr')->nullable();
            $table->text('vizyon_en')->nullable();
        
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
        Schema::dropIfExists('kurumsals');
    }
};
