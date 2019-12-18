<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Discussion extends Model
{
protected $fillable=['title','content','user_id','formation_id'];

public function formation()
{
      return $this->belongsTo('App\Formation');
}
public function user()
{
    return $this->belongsTo('App\User');
}
public function replies()
{
    return $this->hasMany('App\Reply');
}
}
