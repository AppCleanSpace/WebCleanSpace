<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Base;



/**
 * Class ModelHasRole
 * 
 * @property int $role_id
 * @property string $model_type
 * @property int $model_id
 * 
 * @property \App\Models\Role $role
 *
 * @package App\Models\Base
 */
class ModelHasRole extends \Illuminate\Database\Eloquent\Model
{
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'role_id' => 'int',
		'model_id' => 'int'
	];

	public function role()
	{
		return $this->belongsTo(\App\Models\Role::class);
	}
}
