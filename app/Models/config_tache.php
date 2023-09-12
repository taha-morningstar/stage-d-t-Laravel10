<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class config_tache extends Model
{
    use HasFactory;

    public function company()
    {
        return $this->belongsTo(Tache::class);
    }
}
