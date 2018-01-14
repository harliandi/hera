<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 14 Jan 2018 02:53:41 +0700.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Produk
 * 
 * @property int $id_produk
 * @property string $nama_produk
 * @property int $id_kategori
 * @property int $id_city
 * @property string $deskripsi_produk
 * @property string $latitude
 * @property string $longtitude
 * @property \Carbon\Carbon $created_date
 * @property \Carbon\Carbon $updated_date
 * 
 * @property \App\Models\Kategori $kategori
 * @property \Illuminate\Database\Eloquent\Collection $likes
 * @property \Illuminate\Database\Eloquent\Collection $ratings
 *
 * @package App\Models
 */
class Produk extends Eloquent
{
	protected $table = 'produk';
	protected $primaryKey = 'id_produk';
	public $timestamps = false;

	protected $casts = [
		'id_kategori' => 'int',
		'id_city' => 'int'
	];

	protected $dates = [
		'created_date',
		'updated_date'
	];

	protected $fillable = [
		'nama_produk',
		'id_kategori',
		'id_city',
		'deskripsi_produk',
		'latitude',
		'longtitude',
		'created_date',
		'updated_date'
	];

	public function kategori()
	{
		return $this->belongsTo(\App\Models\Kategori::class, 'id_kategori');
	}

	public function likes()
	{
		return $this->hasMany(\App\Models\Like::class, 'id_produk');
	}

	public function ratings()
	{
		return $this->hasMany(\App\Models\Rating::class, 'id_produk');
	}
}
