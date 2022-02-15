<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tbl_kodesedur extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    protected $fillable = ['kode_prosedur'];
}
