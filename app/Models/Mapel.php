<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mapel extends Model
{
    use HasFactory;
    protected $fillable = [
        'kode_mapel',
        'nama_mapel',
        'guru_id'
    ];

    public function siswas()
    {
        return $this->belongsToMany(Siswa::class,'nilais')->withPivot('nilai');
    }

    public function nilai()
    {
        return $this->hasMany(Nilai::class);
    }

    public function guru()
    {
        return $this->belongsTo(Guru::class);
    }
}
