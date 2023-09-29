<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
//user shud input the columns
    protected $fillable = [
        'name',
        'qty',
        'price',
        'description'

    ];
}
