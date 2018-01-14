<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 14 Jan 2018 02:53:41 +0700.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Village
 * 
 * @property string $id
 * @property string $district_id
 * @property string $name
 * 
 * @property \App\Models\District $district
 *
 * @package App\Models
 */
class Village extends Eloquent
{
	public $incrementing = false;
	public $timestamps = false;

	protected $fillable = [
		'district_id',
		'name'
	];

	public function district()
	{
		return $this->belongsTo(\App\Models\District::class);
	}
}
