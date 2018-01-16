<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 15 Jan 2018 21:47:18 +0700.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Province
 * 
 * @property string $id
 * @property string $name
 * 
 * @property \Illuminate\Database\Eloquent\Collection $regencies
 *
 * @package App\Models
 */
class Province extends Eloquent
{
	public $incrementing = false;
	public $timestamps = false;

	protected $fillable = [
		'name'
	];

	public function regencies()
	{
		return $this->hasMany(\App\Models\Regency::class);
	}
}
