<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    // table name to be used
    protected $table = 'articles';

    // columns to be allowed in mass-assingment
    protected $fillable = ['user_id', 'title', 'body'];

    /* Relations */

    // One to many inverse relationship with User model
    public function user() {
    	return $this->belongsTo(User::class, 'user_id');
    }

    // One to Many relationship with Comment model
    public function comments()
    {
    	return $this->hasMany(Comment::class, 'article_id');
    }

    # One-to-Many relation with Like model.
    public function likes()
    {
    	return $this->hasMany(Like::class, 'article_id');
    }

    public function path()
    {
        return route('articles.show',$this);
    }

}
