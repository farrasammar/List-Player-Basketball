<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    protected $table = "players";
    protected $primaryKey = "id";
    protected $fillable = [
        'id', 'nama', 'umur', 'posisi', 'alamat', 'asalsekolah'
    ];
}