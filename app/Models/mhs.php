<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mhs extends Model
{
    use HasFactory;
    protected $fillable = [
        'NIM',
        'Nama',
        'TTL',
        'Alamat',
    ];
    protected $hidden = [
        'created_at',
        'updated_at',
    ];
}
