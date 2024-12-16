<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peserta_Magang extends Model
{
    use HasFactory;

    protected $table = 'peserta_magang';
    protected $primaryKey = 'id_peserta';

    protected $fillable = [
        'id_instansi',
        'nama',
        'nomor_induk',
        'asal_instansi',
        'jurusan',
        'jenis_kelamin',
        'alamat',
        'status',
        'berkas',
    ];

    // Relasi ke tabel instansi
    public function instansi()
    {
        return $this->belongsTo(Instansi::class, 'id_instansi');
    }
}
