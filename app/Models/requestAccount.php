<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class requestAccount extends Model
{
    protected $table = 'request_account';
    protected $fillable = ['nama_lengkap', 'ttl', 'gender', 'kebangsaan', 'negara',
                            'alamat', 'kode_pos', 'pendidikan', 'no_rumah_pribadi',
                            'no_hp_pribadi', 'no_kantor_pribadi', 'email', 'nama_perusahaan',
                            'jabatan', 'alamat_perusahaan', 'kode_pos_perusahaan', 'no_telepon_perusahaan',
                            'fax_perusahaan', 'email_perusahaan', 'tujuan_asesmen', 'tujuan_lain', 'skema'];
}
