<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 07 Jan 2018 22:07:50 +0700.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Kategori
 * 
 * @property int $id_kategori
 * @property int $id_parent
 * @property string $nama_kategori
 * @property string $deskripsi_kategori
 *
 * @package App\Models
 */
class Kategori extends Eloquent
{
	protected $table = 'kategori';
	protected $primaryKey = 'id_kategori';
	public $timestamps = false;

	protected $casts = [
		'id_parent' => 'int'
	];

	protected $fillable = [
		'id_parent',
		'nama_kategori',
		'deskripsi_kategori'
	];
}
