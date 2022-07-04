<?php

namespace App\Models;
use App\Http\Models\Image;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    public function Image()
{
    return $this->hasOne(Person::class);
}
}
