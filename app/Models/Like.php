<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 07 Jan 2018 22:07:50 +0700.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Like
 * 
 * @property int $id_like
 * @property int $id_produk
 * @property \Carbon\Carbon $created_date
 * @property \Carbon\Carbon $updated_date
 *
 * @package App\Models
 */
class Like extends Eloquent
{
	protected $table = 'like';
	protected $primaryKey = 'id_like';
	public $timestamps = false;

	protected $casts = [
		'id_produk' => 'int'
	];

	protected $dates = [
		'created_date',
		'updated_date'
	];

	protected $fillable = [
		'id_produk',
		'created_date',
		'updated_date'
	];
}
