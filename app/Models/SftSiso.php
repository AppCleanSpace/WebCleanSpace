<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

/**
 * Class SftSiso
 *
 * @property int $sft_siso_id
 * @property int $sft_siso_loc_id
 * @property int $sft_siso_usr_id
 * @property int $sft_siso_io
 * @property int|null $sft_siso_sht_id
 * @property int $sft_siso_type
 * @property Carbon $sft_siso_date_time
 *
 * @property Location $location
 * @property Sisotp $sisotp
 * @property User $user
 *
 * @package App\Models
 */
class SftSiso extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;
	protected $table = 'sft_siso';
    protected $primaryKey = 'sft_siso_id';
	public $incrementing = true;
	public $timestamps = false;

	protected $casts = [
		'sft_siso_id' => 'int',
		'sft_siso_loc_id' => 'int',
		'sft_siso_usr_id' => 'int',
		'sft_siso_io' => 'int',
		'sft_siso_sht_id' => 'int',
		'sft_siso_type' => 'int'
	];

	protected $dates = [
		'sft_siso_date_time',
        'sft_siso_o_date_time'
	];

	protected $fillable = [

        'sft_siso_loc_id',
        'sft_siso_usr_id',
        'sft_siso_io',
        'sft_siso_sht_id',
        'sft_siso_type',
        'sft_siso_date_time',
        'sft_siso_o_type',
        'sft_siso_o_date_time',
        'sft_siso_status',

	];

	public function location()
	{
		return $this->belongsTo(Location::class, 'sft_siso_loc_id');
	}

	public function sisotp()
	{
		return $this->belongsTo(Sisotp::class, 'sft_siso_type');
	}

	public function user()
	{
		return $this->belongsTo(User::class, 'sft_siso_usr_id');
	}
}
