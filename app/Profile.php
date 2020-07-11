<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = ['user_id', 'avatar', 'about', 'twitter', 'linkedin', 'facebook', 'stackoverflow', 'youtube'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
