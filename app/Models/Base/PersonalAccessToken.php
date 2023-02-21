<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Base;



/**
 * Class PersonalAccessToken
 * 
 * @property int $id
 * @property string $tokenable_type
 * @property int $tokenable_id
 * @property string $name
 * @property string $token
 * @property string $abilities
 * @property \Carbon\Carbon $last_used_at
 * @property \Carbon\Carbon $expires_at
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 *
 * @package App\Models\Base
 */
class PersonalAccessToken extends \Illuminate\Database\Eloquent\Model
{
	protected $casts = [
		'tokenable_id' => 'int'
	];

	protected $dates = [
		'last_used_at',
		'expires_at'
	];
}
