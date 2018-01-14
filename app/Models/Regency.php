<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 14 Jan 2018 02:53:41 +0700.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Regency
 * 
 * @property string $id
 * @property string $province_id
 * @property string $name
 * 
 * @property \App\Models\Province $province
 * @property \Illuminate\Database\Eloquent\Collection $districts
 *
 * @package App\Models
 */
class Regency extends Eloquent
{
	public $incrementing = false;
	public $timestamps = false;

	protected $fillable = [
		'province_id',
		'name'
	];

	public function province()
	{
		return $this->belongsTo(\App\Models\Province::class);
	}

	public function districts()
	{
		return $this->hasMany(\App\Models\District::class);
	}
}
