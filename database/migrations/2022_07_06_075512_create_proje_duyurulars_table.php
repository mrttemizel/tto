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
        Schema::create('proje_duyurulars', function (Blueprint $table) {
            $table->id();
            $table->string('proje_baslik_tr')->nullable();
            $table->string('proje_baslik_en')->nullable();
            $table->string('proje_kisa_baslik_tr')->nullable();
            $table->string('proje_kisa_baslik_en')->nullable();
            $table->text('aciklama_tr')->nullable();
            $table->text('aciklama_en')->nullable();
            $table->string('proje_yurutucusu')->nullable();
            $table->date('proje_baslama_tarihi')->nullable();;
            $table->date('proje_bitis_tarihi')->nullable();;
            $table->string('image_banner')->nullable();
            $table->string('image_proje')->nullable();
            $table->boolean('status')->default(0);
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
        Schema::dropIfExists('proje_duyurulars');
    }
};
