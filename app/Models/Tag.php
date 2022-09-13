<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'slug',
    ];

    public function scopeSearch($query, $name)
    {
        return $query->where('name','LIKE', '%'.$name.'%');
    }

    public function posts()
    {
        return $this->belongsToMany(Post::class);
    }

    public function dataTagPost()
    {
        return $this->belongsToMany(TagPost::class);
    }
}
