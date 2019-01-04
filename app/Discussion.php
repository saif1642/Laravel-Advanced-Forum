<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Discussion extends Model
{
    protected $fillable  = ['content','title','channel_id','user_id','slug'];

    public function channel(){
       return $this->belongsTo('App\Channel');
    }

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function replies(){
        return $this->hasMany('App\Replies');
    }
}
