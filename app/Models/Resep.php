<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resep extends Model
{
    use HasFactory;
    protected $fillable = [
        'slug','judulindo', 'juduleng', 'deskripsiindo', 'deskripsieng', 'deskripsipendekindo', 'deskripsipendekeng','categori', 'image'

 ];
}
