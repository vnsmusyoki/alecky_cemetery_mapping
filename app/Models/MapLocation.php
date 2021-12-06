<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MapLocation extends Model
{
    use HasFactory;

    protected $fillable = ['location_id', 'section_id', 'deceased_id','status'];

    public function locationsection(){
        return $this->belongsTo(MapSection::class, 'section_id', 'id');
    }
    public function locationdeceased(){
        return $this->belongsTo(Deceased::class, 'deceased_id', 'id');
    }
}
