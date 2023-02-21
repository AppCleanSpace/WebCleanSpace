<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Base;



/**
 * Class ModelHasPermission
 * 
 * @property int $permission_id
 * @property string $model_type
 * @property int $model_id
 * 
 * @property \App\Models\Permission $permission
 *
 * @package App\Models\Base
 */
class ModelHasPermission extends \Illuminate\Database\Eloquent\Model
{
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'permission_id' => 'int',
		'model_id' => 'int'
	];

	public function permission()
	{
		return $this->belongsTo(\App\Models\Permission::class);
	}
}
