<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Base;



/**
 * Class TimexEvent
 * 
 * @property string $id
 * @property string $body
 * @property string $category
 * @property \Carbon\Carbon $end
 * @property \Carbon\Carbon $endTime
 * @property bool $isAllDay
 * @property string $organizer
 * @property array $participants
 * @property string $subject
 * @property \Carbon\Carbon $start
 * @property \Carbon\Carbon $startTime
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 *
 * @package App\Models\Base
 */
class TimexEvent extends \Illuminate\Database\Eloquent\Model
{
	public $incrementing = false;

	protected $casts = [
		'isAllDay' => 'bool',
		'participants' => 'json'
	];

	protected $dates = [
		'end',
		'endTime',
		'start',
		'startTime'
	];
}
