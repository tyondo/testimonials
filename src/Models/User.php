<?php

namespace Tyondo\Testimonial\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $guarded = ['id'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function team()
    {
      return $this->hasMany(config('ttestimonial.namespace').'Team');
    }
    /**
     * Get the number of posts by a user.
     *
     * @param $userId
     *
     * @return bool
     */
    public static function teamCount($userId)
    {
        return Team::where('user_id', $userId)->get()->count();
    }
}
