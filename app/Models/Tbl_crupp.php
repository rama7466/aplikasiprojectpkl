<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tbl_crupp extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    protected $fillable = ['no_upp','status','tanggal_upp','departemen', 'manager_approval', 'email_manager_approval1', 'pengaju', 'email_pengaju', 'kategori_prosedur', 'kode_prosedur', 'nama_dokumen', 'sebelum_perubahan', 'setelah_perubahan', 'alasan', 'fileini', 'tanggal_permohonan_berlaku','progres'];
}
