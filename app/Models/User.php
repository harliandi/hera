<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 15 Jan 2018 21:47:18 +0700.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class User
 * 
 * @property int $id_user
 * @property string $email
 * @property string $nama
 * @property string $pass
 * @property \Carbon\Carbon $created_date
 * @property \Carbon\Carbon $updated_date
 * @property string $id_login
 * @property string $jenis_login
 *
 * @package App\Models
 */
class User extends Eloquent
{
	protected $table = 'user';
	protected $primaryKey = 'id_user';
	public $timestamps = false;

	protected $dates = [
		'created_date',
		'updated_date'
	];

	protected $fillable = [
		'email',
		'nama',
		'pass',
		'created_date',
		'updated_date',
		'id_login',
		'jenis_login'
	];
}
