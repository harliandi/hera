<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 15 Jan 2018 21:47:18 +0700.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class District
 * 
 * @property string $id
 * @property string $regency_id
 * @property string $name
 * 
 * @property \App\Models\Regency $regency
 * @property \Illuminate\Database\Eloquent\Collection $villages
 *
 * @package App\Models
 */
class District extends Eloquent
{
	public $incrementing = false;
	public $timestamps = false;

	protected $fillable = [
		'regency_id',
		'name'
	];

	public function regency()
	{
		return $this->belongsTo(\App\Models\Regency::class);
	}

	public function villages()
	{
		return $this->hasMany(\App\Models\Village::class);
	}
}
