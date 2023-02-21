<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Base;



/**
 * Class Task
 * 
 * @property int $id
 * @property int $sht_if
 * @property int $ip_ip
 * @property string $tsk_name
 * @property string $tsk_desc
 * 
 * @property \App\Models\Inspectionpoint $inspectionpoint
 * @property \App\Models\Shift $shift
 * @property \Illuminate\Database\Eloquent\Collection|\App\Models\TskSht[] $tsk_shts
 *
 * @package App\Models\Base
 */
class Task extends \Illuminate\Database\Eloquent\Model
{
	public $timestamps = false;

	protected $casts = [
		'sht_if' => 'int',
		'ip_ip' => 'int'
	];

	public function inspectionpoint()
	{
		return $this->belongsTo(\App\Models\Inspectionpoint::class, 'ip_ip');
	}

	public function shift()
	{
		return $this->belongsTo(\App\Models\Shift::class, 'sht_if');
	}

	public function tsk_shts()
	{
		return $this->hasMany(\App\Models\TskSht::class, 'tsk_id');
	}
}
