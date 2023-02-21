<?php

namespace App\Models;

use App\Models\Base\PhoneCode as BasePhoneCode;

class PhoneCode extends BasePhoneCode
{
	protected $fillable = [
		'country_cod',
		'country_name',
		'country_iso2',
		'country_iso3',
		'country_phone_code'
	];
}
