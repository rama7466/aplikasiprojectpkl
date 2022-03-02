<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tambahprosedur extends Model
{
    use HasFactory;
    use HasFactory;

    protected $primaryKey = 'id';
    protected $fillable = ['departement','kategori_prosedur','kode_prosedur'];
}
