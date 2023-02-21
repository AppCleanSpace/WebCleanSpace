<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Carbon\CarbonInterval;
use Carbon\CarbonPeriod;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Shift
 *
 * @property int $sht_id
 * @property int $sht_loc_id
 * @property string|null $sht_label
 * @property Carbon $sht_start_date
 * @property Carbon $sht_end_date
 * @property float $sht_rate
 * @property int $sht_repeat_on
 * @property int $sht_estatus
 * @property Carbon $sht_create_date
 *
 * @property Location $location
 *
 * @package App\Models
 */
class Shift extends Model
{
	protected $table = 'shift';
	//protected $primaryKey = 'sht_id';
	public $incrementing = true;
	public $timestamps = false;

	protected $casts = [
		'sht_loc_id' => 'int',
		'sht_repeat_on' => 'int',
		'sht_estatus' => 'int',
        'sht_rate' => 'float',
	];

	protected $dates = [
		'sht_start_date',
		'sht_end_date',
		'sht_create_date'
	];

	protected $fillable = [
        'sht_loc_id',
		'sht_label',
		'sht_start_date',
        'sht_start_hour',
		'sht_end_date',
        'sht_end_hour',
        'sht_rate',
		'sht_repeat_on',
		'sht_estatus',
		'sht_create_date'
	];

    public function hours(){
        $date1 = date_create($this->sht_start_date);
        $date2 = date_create($this->sht_end_date);
       // $hours= $date1->diffInMinutes($date2);
        //$dias = date_diff($date1, $date2)->format('%R%a');
        //$hours=$hours/60;
        //return $hours;
    }

    public function tasks()
    {
        return $this->hasMany(Task::class,'sht_if');
    }
	public function locations()
	{
		return $this->belongsTo(Location::class, 'sht_loc_id');
	}
    public function cleaners()
    {
        return $this->belongsToMany(User::class,'shift_user','shift_sht_id','user_id');
    }
}
