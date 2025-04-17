<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable = [
        'name',
        'id',
    ];
    /** @use HasFactory<\Database\Factories\TagsFactory> */
    use HasFactory;

    public function jobs()
    {
        return $this->belongsToMany(Job::class);
    }
}
