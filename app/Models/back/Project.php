<?php

namespace App\Models\back;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;


    protected $guarded = [];

    public function getYurutucu(){


        return $this->hasOne(User::class,'id','yurutucu_id');


    }

    public function getYurutucuBolum(){
        return $this->hasOne(User::class,'id','yurutucuHocaBolumu_id');
    }

    public function getKurulus(){
        return $this->hasOne(Kuruluslar::class,'id','kurulus_id');
    }

    public function getDurum(){
        return $this->hasOne(Durum::class,'id','durumu_id');
    }

    public function getTuru(){
        return $this->hasOne(Turu::class,'id','turu_id');
    }

    public function getParaBirimi(){
        return $this->hasOne(Parabirimi::class,'id','parabirimi_id');
    }

}
