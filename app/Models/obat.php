<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class obat extends Model
{
    use HasFactory;

    public function keluhan()
    {
    	return $this->belongsToMany('App\Models\keluhan');
    }
}
