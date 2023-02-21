<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InspectionPlan extends Model
{
    protected $table = 'inspectionplan';
    public $timestamps = false;
    use HasFactory;
    protected $fillable = [
		'area_name',
		'id_location',

	];

    public function areas(){
        return $this->hasMany(Area::class,'id');
    }
    public function locations(){
        return $this->belongsTo(Location::class,'id_location');
    }
}
