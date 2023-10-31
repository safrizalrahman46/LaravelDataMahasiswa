<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama',
        'jenkel',
        'alamat',
        'hp',
        'jurusan',
        'email',
        'foto',
        'no_ktp',
    ];

    public function mapels()
    {
        return $this->belongsToMany(Mapel::class,'nilais')->withPivot('nilai');
    }

    
}
