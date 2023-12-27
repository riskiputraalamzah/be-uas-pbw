<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sambutan extends Model
{
    use HasFactory;
    protected $fillable = [
        'judul_sambutan',
        'foto_sambutan',
        'isi_sambutan',
        'foto_sejarah',
        'isi_sejarah',
        'visi',
        'misi',
        'program_kerja',
    ];
}
