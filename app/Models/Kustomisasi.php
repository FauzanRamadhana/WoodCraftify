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
        'status',
        'quantity',
        'color',
        'length',
        'width',
        'height',
        'notes',
        'harga',
        'pembayaran',
        'buktitf',
        'reasoning',
        'prototype'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id');
    }
}