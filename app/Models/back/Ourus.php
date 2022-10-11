<?php

namespace App\Models\back;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ourus extends Model
{
    use HasFactory;

    protected $guarded = [];


    public function  getJobAttribute(){
        $locale = app()->getLocale();
        $property = "job_{$locale}";

        return $this->{$property};
    }

    public function  getDescriptionAttribute(){
        $locale = app()->getLocale();
        $property = "description_{$locale}";

        return $this->{$property};
    }




}
