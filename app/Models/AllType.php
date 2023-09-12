<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\AllType;

class AllType extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $fillable = ['type_name','type_position', 'type_status', 'type_office','type_startdate','type_salary'];
}
