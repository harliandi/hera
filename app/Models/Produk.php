<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 15 Jan 2018 21:47:18 +0700.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Produk
 * 
 * @property int $id_produk
 * @property string $nama_produk
 * @property int $id_kategori
 * @property string $id_city
 * @property string $gambar
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
		'id_kategori' => 'int'
	];

	protected $dates = [
		'created_date',
		'updated_date'
	];

	protected $fillable = [
		'nama_produk',
		'id_kategori',
		'id_city',
		'gambar',
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

    public function city()
    {
        return $this->belongsTo(\App\Models\Regency::class, 'id_city');
    }

	public function likes()
	{
		return $this->hasMany(\App\Models\Like::class, 'id_produk');
	}

	public function ratings()
	{
		return $this->hasOne(\App\Models\Rating::class, 'id_produk');
	}
}
