<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Base;



/**
 * Class PerType
 * 
 * @property int $id
 * @property string $pt_name
 * @property string $pt_description
 * @property int $pt_rol_default_access
 * @property float $pt_rate
 * 
 * @property \Illuminate\Database\Eloquent\Collection|\App\Models\Person[] $people
 *
 * @package App\Models\Base
 */
class PerType extends \Illuminate\Database\Eloquent\Model
{
	protected $table = 'per_type';
	public $timestamps = false;

	protected $casts = [
		'pt_rol_default_access' => 'int',
		'pt_rate' => 'float'
	];

	public function people()
	{
		return $this->hasMany(\App\Models\Person::class);
	}
}
