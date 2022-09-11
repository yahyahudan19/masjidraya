<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kegiatan extends Model
{
    protected $table = 'kegiatan';
    protected $primaryKey = 'id_kegiatan';
    protected $dates = ['created_at', 'updated_at', 'tanggal_kegiatan'];
    protected $fillable = ['nama_kegiatan','pemateri_kegiatan','lokasi_kegiatan','tanggal_kegiatan','thumbnail_kegiatan','link_kegiatan'];

}
