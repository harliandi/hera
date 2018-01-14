<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 14 Jan 2018 02:53:41 +0700.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Rating
 * 
 * @property int $id_rating
 * @property int $id_produk
 * @property \Carbon\Carbon $created_date
 * @property \Carbon\Carbon $updated_date
 * 
 * @property \App\Models\Produk $produk
 *
 * @package App\Models
 */
class Rating extends Eloquent
{
	protected $table = 'rating';
	protected $primaryKey = 'id_rating';
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

	public function produk()
	{
		return $this->belongsTo(\App\Models\Produk::class, 'id_produk');
	}
}
