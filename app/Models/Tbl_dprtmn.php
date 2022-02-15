<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tbl_dprtmn extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    protected $fillable = ['departemen','nama_manager','email_manager'];
}
