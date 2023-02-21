<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Base;



/**
 * Class Sisotp
 * 
 * @property int $id
 * @property string $name
 * 
 * @property \Illuminate\Database\Eloquent\Collection|\App\Models\SftSiso[] $sft_sisos
 *
 * @package App\Models\Base
 */
class Sisotp extends \Illuminate\Database\Eloquent\Model
{
	protected $table = 'sisotp';
	public $timestamps = false;

	public function sft_sisos()
	{
		return $this->hasMany(\App\Models\SftSiso::class, 'sft_siso_type');
	}
}
