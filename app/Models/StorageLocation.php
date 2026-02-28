<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class StorageLocation extends Model
{
    use SoftDeletes;
    use HasFactory;
        protected $fillable = [
        'name',
        'address',
        'capacity_small',
        'capacity_medium',
        'capacity_large',
    ];
}
