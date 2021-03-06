<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 15 Jan 2018 21:47:18 +0700.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Pengaturan
 * 
 * @property int $id_pengaturan
 * @property string $nama_pengaturan
 * @property string $isi_pengaturan
 * @property string $deskripsi_pengaturan
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 *
 * @package App\Models
 */
class Pengaturan extends Eloquent
{
	protected $table = 'pengaturan';
	protected $primaryKey = 'id_pengaturan';

	protected $fillable = [
		'nama_pengaturan',
		'isi_pengaturan',
		'deskripsi_pengaturan'
	];
}
