<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = "posts";

    public function user()
    {
        return $this->belongsTo(User::class); //(User::class, 'author_id'); подключение явной связью
    }
}
