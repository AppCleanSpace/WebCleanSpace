<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Base;



/**
 * Class FailedJob
 * 
 * @property int $id
 * @property string $uuid
 * @property string $connection
 * @property string $queue
 * @property string $payload
 * @property string $exception
 * @property \Carbon\Carbon $failed_at
 *
 * @package App\Models\Base
 */
class FailedJob extends \Illuminate\Database\Eloquent\Model
{
	public $timestamps = false;

	protected $dates = [
		'failed_at'
	];
}
