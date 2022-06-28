<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Facility extends Model
{
    use HasFactory;
    protected $table = 'facility';
    public $timestamps = false;
    protected $fillable = ['description', 'sq_meters', 'capacity', 'opens_at', 'closes_at', 'sport'];

    //Relacion uno a muchos(inversa)
    public function user()
    {
        return $this->belongsTo('App/Models/User');
    }
    //Relacion uno a muchos restaurante
    public function Facility_booking()
    {
        return $this->hasMany('App/Models/Facility_booking');
    }
}
