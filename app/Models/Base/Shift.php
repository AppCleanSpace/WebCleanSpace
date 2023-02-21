<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Base;



/**
 * Class Shift
 * 
 * @property int $id
 * @property int $sht_loc_id
 * @property string $sht_label
 * @property \Carbon\Carbon $sht_start_date
 * @property \Carbon\Carbon $sht_start_hour
 * @property \Carbon\Carbon $sht_end_date
 * @property \Carbon\Carbon $sht_end_hour
 * @property float $sht_rate
 * @property int $sht_repeat_on
 * @property int $sht_estatus
 * @property \Carbon\Carbon $sht_create_date
 * 
 * @property \App\Models\Location $location
 * @property \Illuminate\Database\Eloquent\Collection|\App\Models\SftSiso[] $sft_sisos
 * @property \Illuminate\Database\Eloquent\Collection|\App\Models\User[] $users
 * @property \Illuminate\Database\Eloquent\Collection|\App\Models\ShiftUser[] $shift_users
 * @property \Illuminate\Database\Eloquent\Collection|\App\Models\Task[] $tasks
 * @property \Illuminate\Database\Eloquent\Collection|\App\Models\TskSht[] $tsk_shts
 *
 * @package App\Models\Base
 */
class Shift extends \Illuminate\Database\Eloquent\Model
{
	protected $table = 'shift';
	public $timestamps = false;

	protected $casts = [
		'sht_loc_id' => 'int',
		'sht_rate' => 'float',
		'sht_repeat_on' => 'int',
		'sht_estatus' => 'int'
	];

	protected $dates = [
		'sht_start_date',
		'sht_start_hour',
		'sht_end_date',
		'sht_end_hour',
		'sht_create_date'
	];

	public function location()
	{
		return $this->belongsTo(\App\Models\Location::class, 'sht_loc_id');
	}

	public function sft_sisos()
	{
		return $this->hasMany(\App\Models\SftSiso::class, 'sft_siso_sht_id');
	}

	public function users()
	{
		return $this->belongsToMany(\App\Models\User::class, 'shift_user', 'shift_sht_id')
					->withPivot('date_assig');
	}

	public function shift_users()
	{
		return $this->hasMany(\App\Models\ShiftUser::class, 'shift_sht_id');
	}

	public function tasks()
	{
		return $this->hasMany(\App\Models\Task::class, 'sht_if');
	}

	public function tsk_shts()
	{
		return $this->hasMany(\App\Models\TskSht::class, 'sht_id');
	}
}
