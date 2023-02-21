<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Base;



/**
 * Class User
 * 
 * @property int $id
 * @property string $code
 * @property string $name
 * @property string $email
 * @property \Carbon\Carbon $email_verified_at
 * @property string $password
 * @property string $two_factor_secret
 * @property string $two_factor_recovery_codes
 * @property \Carbon\Carbon $two_factor_confirmed_at
 * @property string $phone
 * @property string $remember_token
 * @property int $current_team_id
 * @property string $profile_photo_path
 * @property int $rol_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * 
 * @property \App\Models\Role $role
 * @property \Illuminate\Database\Eloquent\Collection|\App\Models\SftSiso[] $sft_sisos
 * @property \Illuminate\Database\Eloquent\Collection|\App\Models\Shift[] $shifts
 * @property \Illuminate\Database\Eloquent\Collection|\App\Models\ShiftUser[] $shift_users
 * @property \Illuminate\Database\Eloquent\Collection|\App\Models\TskSht[] $tsk_shts
 *
 * @package App\Models\Base
 */
class User extends \Illuminate\Database\Eloquent\Model
{
	protected $casts = [
		'current_team_id' => 'int',
		'rol_id' => 'int'
	];

	protected $dates = [
		'email_verified_at',
		'two_factor_confirmed_at'
	];

	public function role()
	{
		return $this->belongsTo(\App\Models\Role::class, 'rol_id');
	}

	public function sft_sisos()
	{
		return $this->hasMany(\App\Models\SftSiso::class, 'sft_siso_usr_id');
	}

	public function shifts()
	{
		return $this->belongsToMany(\App\Models\Shift::class, 'shift_user', 'user_id', 'shift_sht_id')
					->withPivot('date_assig');
	}

	public function shift_users()
	{
		return $this->hasMany(\App\Models\ShiftUser::class);
	}

	public function tsk_shts()
	{
		return $this->hasMany(\App\Models\TskSht::class, 'usr_id');
	}
}
