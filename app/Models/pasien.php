<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class pasien extends Model
{
    use HasFactory;
    protected $table = 'pasiens';

    public function keluhan()
    {
    	return $this->hasMany('App\Models\keluhan');
    }

    public function getTglLahirAttribute($value){
        return Carbon::parse($value)->format('d/m/Y');
    }

    public function setTglLahirAttribute($value){  
        $this->attributes['tglLahir'] = Carbon::createFromFormat('d/m/Y', $value)->format('Y-m-d');
    }

}
