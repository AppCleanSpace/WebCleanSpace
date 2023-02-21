<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Base;



/**
 * Class TskSht
 * 
 * @property int $siso_id
 * @property int $sht_id
 * @property int $tsk_id
 * @property int $usr_id
 * @property \Carbon\Carbon $sht_date
 * @property string $tsk_obs
 * @property string $tsk_photo
 * 
 * @property \App\Models\Shift $shift
 * @property \App\Models\SftSiso $sft_siso
 * @property \App\Models\Task $task
 * @property \App\Models\User $user
 *
 * @package App\Models\Base
 */
class TskSht extends \Illuminate\Database\Eloquent\Model
{
	protected $table = 'tsk_sht';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'siso_id' => 'int',
		'sht_id' => 'int',
		'tsk_id' => 'int',
		'usr_id' => 'int'
	];

	protected $dates = [
		'sht_date'
	];

	public function shift()
	{
		return $this->belongsTo(\App\Models\Shift::class, 'sht_id');
	}

	public function sft_siso()
	{
		return $this->belongsTo(\App\Models\SftSiso::class, 'siso_id');
	}

	public function task()
	{
		return $this->belongsTo(\App\Models\Task::class, 'tsk_id');
	}

	public function user()
	{
		return $this->belongsTo(\App\Models\User::class, 'usr_id');
	}
}
