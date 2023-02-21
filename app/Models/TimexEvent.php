<?php

namespace App\Models;

use App\Models\Base\TimexEvent as BaseTimexEvent;

class TimexEvent extends BaseTimexEvent
{
	protected $fillable = [
		'id',
		'body',
		'category',
		'end',
		'endTime',
		'isAllDay',
		'organizer',
		'participants',
		'subject',
		'start',
		'startTime'
	];
}
