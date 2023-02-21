<?php

namespace App\Models;

use App\Models\Base\Task as BaseTask;

class Task extends BaseTask
{
	protected $fillable = [
		'sht_if',
		'ip_ip',
		'tsk_name',
		'tsk_desc'
	];
}
