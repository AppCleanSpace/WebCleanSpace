<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Area extends Model
{
    protected $table = 'area';
    use HasFactory;
    public function inspectionplans(){
        return $this->belongsTo(InspectionPlan::class,'id_ins_plan');
    }
    public function inspectionpoints(){
        return $this-> HasMany(InspectionPoint::class, 'id');
    }
}
