<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 15 Jan 2018 21:47:18 +0700.
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
 * @property \App\Models\Produk $produk
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

	public function produk()
	{
		return $this->belongsTo(\App\Models\Produk::class, 'id_produk');
	}
}
