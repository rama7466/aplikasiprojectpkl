<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tbl_kategori extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    protected $fillable = ['kategori_prosedur'];
}
