<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class poli extends Model
{
    use HasFactory;
    protected $table = 'polis';

    public function dokter()
    {
    	return $this->hasOne('App\Models\dokter');
    }

    public function keluhan()
    {
    	return $this->hasOne('App\Models\keluhan');
    }
}
