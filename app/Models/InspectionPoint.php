<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InspectionPoint extends Model
{
    protected $table = 'inspectionpoit';
    use HasFactory;
    public function areas (){
        return $this ->belongsTo(Area::class,'area_id');
    }
}
