<?php

namespace App\Models\back;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kurumsal extends Model
{
    use HasFactory;

    protected $fillable = [
        'hakkimizda_tr',
        'hakkimizda_en',
        'misyon_tr',
        'misyon_en',
        'vizyon_tr',
        'vizyon_en',
    ];


    public function getHakkimizdaAttribute(){
        $locale = app()->getLocale();
        $property = "hakkimizda_{$locale}";

        return $this->{$property};

    }

    public function getMisyonAttribute(){
        $locale = app()->getLocale();
        $property = "misyon_{$locale}";
        return $this->{$property};
    }

    public function getVizyonAttribute(){
        $locale = app()->getLocale();
        $property = "vizyon_{$locale}";
        return $this->{$property};
    }











}




