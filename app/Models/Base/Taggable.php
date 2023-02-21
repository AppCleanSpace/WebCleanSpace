<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Base;



/**
 * Class Taggable
 * 
 * @property int $tag_id
 * @property string $taggable_type
 * @property int $taggable_id
 * 
 * @property \App\Models\Tag $tag
 *
 * @package App\Models\Base
 */
class Taggable extends \Illuminate\Database\Eloquent\Model
{
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'tag_id' => 'int',
		'taggable_id' => 'int'
	];

	public function tag()
	{
		return $this->belongsTo(\App\Models\Tag::class);
	}
}
