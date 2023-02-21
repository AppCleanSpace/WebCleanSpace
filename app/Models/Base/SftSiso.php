<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Base;



/**
 * Class SftSiso
 * 
 * @property int $sft_siso_id
 * @property int $sft_siso_loc_id
 * @property int $sft_siso_usr_id
 * @property int $sft_siso_io
 * @property int $sft_siso_sht_id
 * @property int $sft_siso_type
 * @property \Carbon\Carbon $sft_siso_date_time
 * @property int $sft_siso_o_type
 * @property \Carbon\Carbon $sft_siso_o_date_time
 * @property int $sft_siso_status
 * 
 * @property \App\Models\Location $location
 * @property \App\Models\Sisotp $sisotp
 * @property \App\Models\Shift $shift
 * @property \App\Models\User $user
 * @property \Illuminate\Database\Eloquent\Collection|\App\Models\TskSht[] $tsk_shts
 *
 * @package App\Models\Base
 */
class SftSiso extends \Illuminate\Database\Eloquent\Model
{
	protected $table = 'sft_siso';
	public $timestamps = false;

	protected $casts = [
		'sft_siso_loc_id' => 'int',
		'sft_siso_usr_id' => 'int',
		'sft_siso_io' => 'int',
		'sft_siso_sht_id' => 'int',
		'sft_siso_type' => 'int',
		'sft_siso_o_type' => 'int',
		'sft_siso_status' => 'int'
	];

	protected $dates = [
		'sft_siso_date_time',
		'sft_siso_o_date_time'
	];

	public function location()
	{
		return $this->belongsTo(\App\Models\Location::class, 'sft_siso_loc_id');
	}

	public function sisotp()
	{
		return $this->belongsTo(\App\Models\Sisotp::class, 'sft_siso_type');
	}

	public function shift()
	{
		return $this->belongsTo(\App\Models\Shift::class, 'sft_siso_sht_id');
	}

	public function user()
	{
		return $this->belongsTo(\App\Models\User::class, 'sft_siso_usr_id');
	}

	public function tsk_shts()
	{
		return $this->hasMany(\App\Models\TskSht::class, 'siso_id');
	}
}
