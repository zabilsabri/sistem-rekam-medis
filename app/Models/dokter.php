<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dokter extends Model
{
    use HasFactory;
    protected $table = 'users';

    public function poli()
    {
    	return $this->belongsTo('App\Models\poli');
    }

    public function keluhan()
    {
    	return $this->hasMany('App\Models\keluhan');
    }
}
