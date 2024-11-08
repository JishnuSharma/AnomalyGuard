<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeviceFile extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'device_id',
        'file_name',
        'file_path',
    ];
}
