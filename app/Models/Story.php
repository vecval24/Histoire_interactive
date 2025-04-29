<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Story extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description'];

    public function chapters()
    {
        return $this->hasMany(Chapter::class);
    }
}
