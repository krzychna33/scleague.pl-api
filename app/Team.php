<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\User;
use App\Event;

class Team extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $fillable = ['name', 'avatar_url', 'steamgroup', 'description', 'team_owner_id'];

    public function user(){
        return $this->hasOne(User::class);
    }

    public function events(){
        return $this->belongsToMany(Event::class)->withTimestamps();
    }
    
}