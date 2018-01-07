<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 07 Jan 2018 22:07:50 +0700.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Faq
 * 
 * @property int $id_faq
 * @property string $tanya_faq
 * @property string $jawab_faq
 *
 * @package App\Models
 */
class Faq extends Eloquent
{
	protected $table = 'faq';
	protected $primaryKey = 'id_faq';
	public $timestamps = false;

	protected $fillable = [
		'tanya_faq',
		'jawab_faq'
	];
}
