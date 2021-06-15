<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Municipality extends Model
{
    protected $fillable = ['municipalityName', 'activeStatus', 'district_id'];
    use HasFactory;
}
