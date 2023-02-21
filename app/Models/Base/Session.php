<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Base;



/**
 * Class Session
 * 
 * @property string $id
 * @property int $user_id
 * @property string $ip_address
 * @property string $user_agent
 * @property string $payload
 * @property int $last_activity
 *
 * @package App\Models\Base
 */
class Session extends \Illuminate\Database\Eloquent\Model
{
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'user_id' => 'int',
		'last_activity' => 'int'
	];
}
