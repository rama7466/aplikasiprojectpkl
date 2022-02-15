<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Uploads extends Model
{
    use HasFactory;
    protected $table ='uploads';
    protected $primaryKey = 'id';
    protected $fillable = array('data_file','created_at','updated_at');
}
