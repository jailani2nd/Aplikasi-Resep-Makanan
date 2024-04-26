<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rekom extends Model
{
    use HasFactory;
    protected $fillable = [
        'jenispenyakitindo','jenispenyakiteng','judulindo', 'juduleng','biologis', 'deskripsiindo', 'deskripsieng', 'image'

 ];
}
