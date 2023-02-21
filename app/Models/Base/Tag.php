<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Base;



/**
 * Class Tag
 * 
 * @property int $id
 * @property array $name
 * @property array $slug
 * @property string $type
 * @property int $order_column
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * 
 * @property \Illuminate\Database\Eloquent\Collection|\App\Models\Taggable[] $taggables
 *
 * @package App\Models\Base
 */
class Tag extends \Illuminate\Database\Eloquent\Model
{
	protected $casts = [
		'name' => 'json',
		'slug' => 'json',
		'order_column' => 'int'
	];

	public function taggables()
	{
		return $this->hasMany(\App\Models\Taggable::class);
	}
}
