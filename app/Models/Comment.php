<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

   # table name to be used by model
   protected $table = 'comments';

   # columns to be allowed in mass-assingment
   protected $fillable = ['user_id', 'article_id', 'body'];

   /** Relations */

   # One-to-Many inverse relation with User model.
   public function user()
   {
       return $this->belongsTo(User::class, 'user_id');
   }

   # One-to-Many inverse relation with Post model.
   public function article()
   {
       return $this->belongsTo(Article::class, 'article_id');
   }
}
