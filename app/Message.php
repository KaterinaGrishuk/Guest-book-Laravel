<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Message extends Model
{
    protected $fillable = ['name', 'email', 'theme', 'text','number', 'user_id'];
    public function user(){
        return $this->belongsTo('App\User');
    }

    public function getCreatedAtAttribute($data){
        return Carbon::parse($data)->format('H:i:s d/m/Y');
    }
}
