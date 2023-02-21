<?php

namespace App\Models;

use App\Models\Base\Notification as BaseNotification;

class Notification extends BaseNotification
{
	protected $fillable = [
		'not_id',
		'not_subject',
		'not_message',
		'not_usr_id',
		'not_sent_date',
		'not_status',
		'not_deleted'
	];
}
