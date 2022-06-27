<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Facility extends Model
{
    use HasFactory;
    protected $table = 'facility';
    protected $fillable = ['description', 'sq_meters', 'capacity', 'opens_at', 'closes_at', 'sport'];
}