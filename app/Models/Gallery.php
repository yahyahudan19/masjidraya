<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $table = 'gallery';
    protected $primaryKey = 'id_gallery';
    protected $dates = ['created_at', 'updated_at', 'tanggal_gallery'];
    protected $fillable = ['title_gallery','pemateri_gallery','gambar_gallery','tag_gallery','tanggal_gallery'];
}
