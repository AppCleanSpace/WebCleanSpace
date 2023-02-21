<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Base;



/**
 * Class ShiftUser
 * 
 * @property int $shift_sht_id
 * @property int $user_id
 * @property \Carbon\Carbon $date_assig
 * 
 * @property \App\Models\Shift $shift
 * @property \App\Models\User $user
 *
 * @package App\Models\Base
 */
class ShiftUser extends \Illuminate\Database\Eloquent\Model
{
	protected $table = 'shift_user';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'shift_sht_id' => 'int',
		'user_id' => 'int'
	];

	protected $dates = [
		'date_assig'
	];

	public function shift()
	{
		return $this->belongsTo(\App\Models\Shift::class, 'shift_sht_id');
	}

	public function user()
	{
		return $this->belongsTo(\App\Models\User::class);
	}
}
