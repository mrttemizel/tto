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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('projeAdi')->nullable();
            $table->date('basvurutarihi')->nullable();
            $table->date('onaytarihi')->nullable();;
            $table->date('baslamatarihi')->nullable();;
            $table->date('bitistarihi')->nullable();;
            $table->string('butce')->nullable();
            $table->string('destekkaynagi')->nullable();
            $table->string('apdkkodu')->nullable();
            $table->string('projekodu')->nullable();
            $table->string('kanit')->nullable();
            $table->string('dosya')->nullable();


            $table->boolean('proje_gosterimi')->default(0);
            $table->timestamps();

            $table->unsignedBigInteger('yurutucu_id')->nullable();
            $table->foreign('yurutucu_id')->references('name')->on('users');

            $table->unsignedBigInteger('yurutucuHocaBolumu_id')->nullable();
            $table->foreign('yurutucuHocaBolumu_id')->references('bolumu')->on('users');

            $table->unsignedBigInteger('kurulus_id')->nullable();
            $table->foreign('kurulus_id')->references('id')->on('kuruluslars');

            $table->unsignedBigInteger('durumu_id')->nullable();
            $table->foreign('durumu_id')->references('id')->on('durums');

            $table->unsignedBigInteger('turu_id')->nullable();
            $table->foreign('turu_id')->references('id')->on('turus');

            $table->unsignedBigInteger('parabirimi_id')->nullable();
            $table->foreign('parabirimi_id')->references('id')->on('para_birimis');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projects');
    }
};
