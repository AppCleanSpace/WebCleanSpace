<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Base;



/**
 * Class Inspectionpoint
 * 
 * @property int $id
 * @property string $ip_name
 * @property string $details
 * @property int $area_id
 * 
 * @property \App\Models\Area $area
 * @property \Illuminate\Database\Eloquent\Collection|\App\Models\Task[] $tasks
 *
 * @package App\Models\Base
 */
class Inspectionpoint extends \Illuminate\Database\Eloquent\Model
{
	protected $table = 'inspectionpoint';
	public $timestamps = false;

	protected $casts = [
		'area_id' => 'int'
	];

	public function area()
	{
		return $this->belongsTo(\App\Models\Area::class);
	}

	public function tasks()
	{
		return $this->hasMany(\App\Models\Task::class, 'ip_ip');
	}
}
