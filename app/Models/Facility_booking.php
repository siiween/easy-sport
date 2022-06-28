<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Facility_booking extends Model
{
    use HasFactory;
    protected $table = 'facility_booking';
    public $timestamps = false;
    protected $fillable = ['date', 'time'];

    //Relacion uno a muchos(inversa)
    public function user_id()
    {
        return $this->belongsTo('App/Models/User');
    }

    //Relacion uno a muchos(inversa)
    public function falicity_id()
    {
        return $this->belongsTo('App/Models/Facility');
    }
}
