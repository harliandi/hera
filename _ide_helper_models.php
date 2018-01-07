<?php
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App{
/**
 * App\User
 *
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 */
	class User extends \Eloquent {}
}

namespace App\Models{
/**
 * Class Kategori
 *
 * @property int $id_kategori
 * @property int $id_parent
 * @property string $nama_kategori
 * @property string $deskripsi_kategori
 * @package App\Models
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Kategori whereDeskripsiKategori($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Kategori whereIdKategori($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Kategori whereIdParent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Kategori whereNamaKategori($value)
 */
	class Kategori extends \Eloquent {}
}

namespace App\Models{
/**
 * Class Pengaturan
 *
 * @property int $id_pengaturan
 * @property string $nama_pengaturan
 * @property string $isi_pengaturan
 * @property string $deskripsi_pengaturan
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @package App\Models
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Pengaturan whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Pengaturan whereDeskripsiPengaturan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Pengaturan whereIdPengaturan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Pengaturan whereIsiPengaturan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Pengaturan whereNamaPengaturan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Pengaturan whereUpdatedAt($value)
 */
	class Pengaturan extends \Eloquent {}
}

namespace App\Models{
/**
 * Class Faq
 *
 * @property int $id_faq
 * @property string $tanya_faq
 * @property string $jawab_faq
 * @package App\Models
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Faq whereIdFaq($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Faq whereJawabFaq($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Faq whereTanyaFaq($value)
 */
	class Faq extends \Eloquent {}
}

