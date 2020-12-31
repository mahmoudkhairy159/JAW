<?php

namespace App;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Models\Course;


class User extends Authenticatable
{
    protected $guard = 'web';
    use Notifiable;
    protected $fillable = [
        'name', 'email', 'password','phone','region'
    ];
    protected $hidden = [
        'password', 'remember_token',
    ];
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    //relationship * to * with courses
    public function courses()
    {
        return $this->belongsToMany(Course::class);
    }


}
