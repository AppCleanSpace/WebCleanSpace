<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Base;



/**
 * Class Location
 * 
 * @property int $id
 * @property string $loc_name
 * @property string $loc_time_zone
 * @property string $loc_sec_info
 * @property string $loc_cleaning_inst
 * @property string $loc_addr1
 * @property string $loc_addr2
 * @property string $loc_city
 * @property string $loc_estate
 * @property int $loc_zip_pc
 * @property string $loc_country_code
 * @property float $loc_lat
 * @property float $loc_lon
 * @property int $loc_radius
 * @property polygon $loc_geofence
 * @property array $location
 * 
 * @property \Illuminate\Database\Eloquent\Collection|\App\Models\Inspectionplan[] $inspectionplans
 * @property \Illuminate\Database\Eloquent\Collection|\App\Models\SftSiso[] $sft_sisos
 * @property \Illuminate\Database\Eloquent\Collection|\App\Models\Shift[] $shifts
 *
 * @package App\Models\Base
 */
class Location extends \Illuminate\Database\Eloquent\Model
{
	protected $table = 'location';
	public $timestamps = false;

	protected $casts = [
		'loc_zip_pc' => 'int',
		'loc_lat' => 'float',
		'loc_lon' => 'float',
		'loc_radius' => 'int',
		'loc_geofence' => 'polygon',
		'location' => 'json'
	];

	public function inspectionplans()
	{
		return $this->hasMany(\App\Models\Inspectionplan::class, 'id_location');
	}

	public function sft_sisos()
	{
		return $this->hasMany(\App\Models\SftSiso::class, 'sft_siso_loc_id');
	}

	public function shifts()
	{
		return $this->hasMany(\App\Models\Shift::class, 'sht_loc_id');
	}
}
