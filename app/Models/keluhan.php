<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class keluhan extends Model
{
    use HasFactory;
    protected $table = 'keluhans';

    public function poli()
    {
    	return $this->belongsTo('App\Models\poli');
    }

    public function dokter()
    {
    	return $this->belongsTo('App\Models\dokter');
    }

    public function pasien()
    {
    	return $this->belongsTo('App\Models\pasien');
    }

    public function getCreatedAtAttribute($value){
        return Carbon::parse($value)->format('d/m/Y');
    }

}
