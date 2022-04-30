<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
         'title',
         'paragraph',
         'user_id'
    ];



    public function author (): HasOne
    {
     return $this->hasOne(Post::class,'user_id');
    }
}
