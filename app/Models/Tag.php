<?php

namespace App\Models;

use App\Models\Base\Tag as BaseTag;

class Tag extends BaseTag
{
	protected $fillable = [
		'name',
		'slug',
		'type',
		'order_column'
	];
}
