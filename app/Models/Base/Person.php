<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Base;



/**
 * Class Person
 * 
 * @property int $id
 * @property string $per_id2
 * @property string $per_first_name
 * @property string $per_last_name
 * @property string $per_phone_num
 * @property string $per_email
 * @property int $per_type_id
 * 
 * @property \App\Models\PerType $per_type
 *
 * @package App\Models\Base
 */
class Person extends \Illuminate\Database\Eloquent\Model
{
	protected $table = 'person';
	public $timestamps = false;

	protected $casts = [
		'per_type_id' => 'int'
	];

	public function per_type()
	{
		return $this->belongsTo(\App\Models\PerType::class);
	}
}
