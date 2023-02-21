<?php

namespace App\Models;

use App\Models\Base\Taggable as BaseTaggable;

class Taggable extends BaseTaggable
{
	protected $fillable = [
		'tag_id',
		'taggable_type',
		'taggable_id'
	];
}
