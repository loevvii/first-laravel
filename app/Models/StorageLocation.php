<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StorageLocation extends Model
{
    /** @use HasFactory<\Database\Factories\StorageLocationFactory> */
    use HasFactory;
        protected $fillable = [
        'name',
        'address',
        'capacity_small',
        'capacity_medium',
        'capacity_large',
    ];
}
