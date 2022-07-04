<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Models\Alias;
use App\Http\Models\Image;
use App\Http\Models\Status;

class Person extends Model
{
    use HasFactory;

    public function aliases()
        {
            return $this->hasMany(Alias::class);
        }

    public function image()
        {
            return $this->BelongsTo(Image::class);
        }

    public function status()
        {
            return $this->BelongsTo(Status::class);
        }
}
