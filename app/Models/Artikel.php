<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    protected $table = 'artikel';
    protected $primaryKey = 'id_artikel';
    protected $dates = ['created_at', 'updated_at', 'tanggal_artikel'];
    protected $fillable = ['nama_artikel','penulis_artikel','konten_artikel','tanggal_artikel','thumbnail_artikel','status_artikel'];
}
