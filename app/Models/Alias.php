<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Models\Person;

class Alias extends Model
{
    use HasFactory;

        public function person()
        {
            return $this->BelongsTo(Person::class);
        }
}
