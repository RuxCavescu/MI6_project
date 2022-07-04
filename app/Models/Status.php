<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Models\Person;
use App\Http\Models\Image;


class Status extends Model
{
    use HasFactory;

        public function people()
        {
            return $this->hasMany(Person::class);
        }

        public function image()
{
    return $this->hasOne(Person::class);
}
}
