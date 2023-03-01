<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class obat_keluhan extends Model
{
    use HasFactory;
    protected $table = 'keluhan_obat';

    public function keluhan()
    {
    	return $this->belongsTo('App\Models\keluhan');
    }

}
