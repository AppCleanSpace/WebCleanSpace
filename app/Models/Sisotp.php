<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Sisotp
 * 
 * @property int $id
 * @property string|null $name
 * 
 * @property Collection|SftSiso[] $sft_sisos
 *
 * @package App\Models
 */
class Sisotp extends Model
{
	protected $table = 'sisotp';
	public $timestamps = false;

	protected $fillable = [
		'name'
	];

	public function sft_sisos()
	{
		return $this->hasMany(SftSiso::class, 'sft_siso_type');
	}
}
