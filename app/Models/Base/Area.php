<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Base;



/**
 * Class Area
 * 
 * @property int $id
 * @property string $area_name
 * @property int $id_ins_plan
 * 
 * @property \App\Models\Inspectionplan $inspectionplan
 * @property \Illuminate\Database\Eloquent\Collection|\App\Models\Inspectionpoint[] $inspectionpoints
 *
 * @package App\Models\Base
 */
class Area extends \Illuminate\Database\Eloquent\Model
{
	protected $table = 'area';
	public $timestamps = false;

	protected $casts = [
		'id_ins_plan' => 'int'
	];

	public function inspectionplan()
	{
		return $this->belongsTo(\App\Models\Inspectionplan::class, 'id_ins_plan');
	}

	public function inspectionpoints()
	{
		return $this->hasMany(\App\Models\Inspectionpoint::class);
	}
}
