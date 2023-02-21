<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Location
 *
 * @property int $id
 * @property string $loc_name
 * @property string $loc_time_zone
 * @property string|null $loc_sec_info
 * @property string|null $loc_cleaning_inst
 * @property string $loc_addr1
 * @property string $loc_addr2
 * @property string $loc_city
 * @property string $loc_estate
 * @property int $loc_zip_pc
 * @property string|null $loc_country_code
 * @property float $loc_lat
 * @property float $loc_lon
 * @property int|null $loc_radius
 * @property string|null $loc_geofence
 *
 * @property Collection|SftSiso[] $sft_sisos
 * @property Collection|Shift[] $shifts
 *
 * @package App\Models
 */
class Location extends Model
{
	protected $table = 'location';
	public $timestamps = false;

	protected $casts = [
		'loc_zip_pc' => 'int',
		'loc_lat' => 'float',
		'loc_lon' => 'float',
		'loc_radius' => 'int'
	];

	protected $fillable = [
		'loc_name',
		'loc_time_zone',
		'loc_sec_info',
		'loc_cleaning_inst',
		'loc_addr1',
		'loc_addr2',
		'loc_city',
		'loc_estate',
		'loc_zip_pc',
		'loc_country_code',
		'loc_lat',
		'loc_lon',
		'loc_radius',
        'loc_geofence',
        'location',
	];

    /* function getLocationAttribute($value)
    {
    //replace lat_column_name and lng_column_name with your column names
        return json_encode([
            "lat" => (float)$this->loc_lat,
            "lng" => (float)$this->loc_lon,
        ]);
    }

    function setLocationAttribute($value)
    {
    //replace lat_column_name and lng_column_name with your column names
        $this->attributes['loc_lat'] = $value["lat"];
        $this->attributes['loc_lon'] = $value["lng"];
    } */

     /**
     * REPLACE THE FOLLOWING ARRAYS IN YOUR Location MODEL
     *
     * Replace your existing $fillable and/or $guarded and/or $appends arrays with these - we already merged
     * any existing attributes from your model, and only included the one(s) that need changing.
     */



     protected $appends = [
        'location',
    ];

    /**
     * ADD THE FOLLOWING METHODS TO YOUR Location MODEL
     *
     * The 'loc_lat' and 'Loc_lon' attributes should exist as fields in your table schema,
     * holding standard decimal latitude and longitude coordinates.
     *
     * The 'location' attribute should NOT exist in your table schema, rather it is a computed attribute,
     * which you will use as the field name for your Filament Google Maps form fields and table columns.
     *
     * You may of course strip all comments, if you don't feel verbose.
     */

    /**
    * Returns the 'loc_lat' and 'Loc_lon' attributes as the computed 'location' attribute,
    * as a standard Google Maps style Point array with 'lat' and 'lng' attributes.
    *
    * Used by the Filament Google Maps package.
    *
    * Requires the 'location' attribute be included in this model's $fillable array.
    *
    * @return array
    */

    function getLocationAttribute(): array
    {
        return [
            "lat" => (float)$this->loc_lat,
            "lng" => (float)$this->loc_lon,
        ];
    }

    /**
    * Takes a Google style Point array of 'lat' and 'lng' values and assigns them to the
    * 'loc_lat' and 'Loc_lon' attributes on this model.
    *
    * Used by the Filament Google Maps package.
    *
    * Requires the 'location' attribute be included in this model's $fillable array.
    *
    * @param ?array $location
    * @return void
    */
    function setLocationAttribute(?array $location): void
    {
        if (is_array($location))
        {
            $this->attributes['loc_lat'] = $location['lat'];
            $this->attributes['loc_lon'] = $location['lng'];
            unset($this->attributes['location']);
        }
    }

    /**
     * Get the lat and lng attribute/field names used on this table
     *
     * Used by the Filament Google Maps package.
     *
     * @return string[]
     */
    public static function getLatLngAttributes(): array
    {
        return [
            'lat' => 'loc_lat',
            'lng' => 'loc_lon',
        ];
    }

   /**
    * Get the name of the computed location attribute
    *
    * Used by the Filament Google Maps package.
    *
    * @return string
    */
    public static function getComputedLocation(): string
    {
        return 'location';
    }

	public function sft_sisos()
	{
		return $this->hasMany(SftSiso::class, 'sft_siso_loc_id');
	}

	public function shifts()
	{
		return $this->hasMany(Shift::class, 'sht_loc_id');
	}
}
