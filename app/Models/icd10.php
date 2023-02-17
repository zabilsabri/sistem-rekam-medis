<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class icd10 extends Model
{
    use HasFactory;

    public function keluhan()
    {
    	return $this->hasOne('App\Models\keluhan');
    }
}
