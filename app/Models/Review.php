<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 14 Jan 2018 21:19:21 +0700.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Review
 * 
 * @property int $id_review
 * @property int $id_produk
 * @property string $nama
 * @property string $email
 * @property string $isi
 * @property \Carbon\Carbon $created_date
 * @property \Carbon\Carbon $updated_date
 *
 * @package App\Models
 */
class Review extends Eloquent
{
	protected $table = 'review';
	protected $primaryKey = 'id_review';
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
		'nama',
		'email',
		'isi',
		'created_date',
		'updated_date'
	];
}
