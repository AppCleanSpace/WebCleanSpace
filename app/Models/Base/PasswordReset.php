<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Base;



/**
 * Class PasswordReset
 * 
 * @property string $email
 * @property string $token
 * @property \Carbon\Carbon $created_at
 *
 * @package App\Models\Base
 */
class PasswordReset extends \Illuminate\Database\Eloquent\Model
{
	public $incrementing = false;
	public $timestamps = false;
}
