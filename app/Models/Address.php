<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    public $table = 'Addresses';
    
    protected $fillable = [
        'address',
    ];
    
    use HasFactory;
}
