<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 07 Jan 2018 22:07:50 +0700.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Produk
 * 
 * @property int $id_produk
 * @property string $nama_produk
 * @property int $id_kategori
 * @property string $deskripsi_produk
 * @property string $latitude
 * @property string $longtitude
 * @property \Carbon\Carbon $created_date
 * @property \Carbon\Carbon $updated_date
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
		'deskripsi_produk',
		'latitude',
		'longtitude',
		'created_date',
		'updated_date'
	];
}
