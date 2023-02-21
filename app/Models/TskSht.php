<?php

namespace App\Models;

use App\Models\Base\TskSht as BaseTskSht;

class TskSht extends BaseTskSht
{
	protected $fillable = [
		'siso_id',
		'sht_id',
		'tsk_id',
		'usr_id',
		'sht_date',
		'tsk_obs',
		'tsk_photo'
	];
}
