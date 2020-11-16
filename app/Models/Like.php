<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    use HasFactory;

     # table name to be used by model.
     protected $table = 'likes';

     # columns names to be used in mass-assignment
     protected $fillable = ['user_id', 'article_id'];

     /* Relations */

     # One-to-Many inverse relationship with User model.
     public function user()
     {
         return $this->belongsTo(User::class, 'user_id');
     }

     # One-to-Many inverse relationship with Comment model.
     public function article()
     {
         return $this->belongsTo(Article::class, 'article_id');
     }
}
