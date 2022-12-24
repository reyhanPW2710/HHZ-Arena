<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Facility extends Model
{
    use HasFactory;

    protected $table = 'facilities';

    protected $fillable = [
        'name',
        'description',
        'price'
    ];

    public function requests()
    {
        return $this->hasMany(Request::class);
    }

    public function images()
    {
        return $this->hasMany(Image::class);
    }
}
