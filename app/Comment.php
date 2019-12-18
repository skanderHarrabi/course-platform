<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
   protected $fillable = [
       'body','user_id','formation_id'
   ];
   public function formation()
   {
       return $this->belongsTo('App\Formation');
   }
   public function user()
   {
       return $this->belongsTo('App\User');
   }
   public function comments()
   {
       return $this->hasMany('App\Comment');
   }
}
