<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testi extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama', 'posisi', 'deskripsiindo', 'deskripsieng', 'image'

 ];
}
