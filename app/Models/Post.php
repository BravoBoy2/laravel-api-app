<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    protected $fillable = 
    [
    'title', 
    'content'
        ];

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
          // foreign key in the posts table, this corresponds to the user_id in the users table.
           // it means, every post belongs to a user.
    }

    
}
