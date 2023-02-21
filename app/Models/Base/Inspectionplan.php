<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Base;



/**
 * Class Inspectionplan
 * 
 * @property int $id
 * @property string $area_name
 * @property int $id_location
 * 
 * @property \App\Models\Location $location
 * @property \Illuminate\Database\Eloquent\Collection|\App\Models\Area[] $areas
 *
 * @package App\Models\Base
 */
class Inspectionplan extends \Illuminate\Database\Eloquent\Model
{
	protected $table = 'inspectionplan';
	public $timestamps = false;

	protected $casts = [
		'id_location' => 'int'
	];

	public function location()
	{
		return $this->belongsTo(\App\Models\Location::class, 'id_location');
	}

	public function areas()
	{
		return $this->hasMany(\App\Models\Area::class, 'id_ins_plan');
	}
}
