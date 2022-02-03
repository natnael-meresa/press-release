<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'package', 'nopackage', 'title', 'desc', 'bname', 'contactemail', 'cweb', 'image'
    ];
}
