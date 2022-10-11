<?php

namespace App\Models\back;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    use HasFactory;

    protected $guarded = [];


    public function getHeaderAttribute(){
        $locale = app()->getLocale();
        $property = "header_{$locale}";
        return $this->{$property};
    }

    public function getTextAttribute(){
        $locale = app()->getLocale();
        $property = "text_{$locale}";
        return $this->{$property};
    }

}
