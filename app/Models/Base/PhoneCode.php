<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Base;



/**
 * Class PhoneCode
 * 
 * @property int $country_cod
 * @property string $country_name
 * @property string $country_iso2
 * @property string $country_iso3
 * @property string $country_phone_code
 *
 * @package App\Models\Base
 */
class PhoneCode extends \Illuminate\Database\Eloquent\Model
{
	protected $table = 'phone_code';
	protected $primaryKey = 'country_cod';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'country_cod' => 'int'
	];
}
