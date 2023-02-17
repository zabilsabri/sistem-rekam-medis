<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class obat_keluhan extends Model
{
    use HasFactory;
    protected $table = 'keluhan_obat';

    protected $fillable = ['obat_id', 'keluhan_id'];

    public function setObatIdAttribute($value)
    {
        $this->attributes['obat_id'] = json_encode($value);
    }

    public function getObatIdAttribute($value)
    {
        return $this->attributes['obat_id'] = json_decode($value);
    }
}
