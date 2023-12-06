<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kustomisasi extends Model
{
    use HasFactory;

    protected $table = 'kustomisasi';

    public $timestamps = false;

    protected $fillable = [
        'image',
        'name',
        'description',
        'id_user',
    ];
}