<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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

}
