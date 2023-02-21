<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Base;



/**
 * Class Notification
 * 
 * @property int $not_id
 * @property string $not_subject
 * @property string $not_message
 * @property int $not_usr_id
 * @property \Carbon\Carbon $not_sent_date
 * @property int $not_status
 * @property int $not_deleted
 *
 * @package App\Models\Base
 */
class Notification extends \Illuminate\Database\Eloquent\Model
{
	protected $table = 'notification';
	protected $primaryKey = 'not_id';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'not_id' => 'int',
		'not_usr_id' => 'int',
		'not_status' => 'int',
		'not_deleted' => 'int'
	];

	protected $dates = [
		'not_sent_date'
	];
}
