<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;
    protected $fillable = [
        'status',
        'name',
        'sku',
        'price',
        'category',
        'description',
        'url_key'
    ];

}
