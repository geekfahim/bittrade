<?php

namespace App\Models;

use App\Notifications\ResetPasswordNotification;
use App\Notifications\UserVerifyNotification;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;
   
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'l_name', 'email', 'phone','country','password', 'ref_id', 'ref_by'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
    ];


    public function dp(){
    	return $this->hasMany('App\Deposit', 'user');
    }

    public function wd(){
    	return $this->hasMany('App\Withdrawal', 'user');
    }
    public function tuser(){
    	return $this->belongsTo('App\Admin', 'assign_to');
    }
    public function dplan(){
    	return $this->belongsTo('App\Plans', 'plan');
    }

    public function sendEmailVerificationNotification() {
        $this->notify(new UserVerifyNotification(Auth::user()));
    }

    public function sendPasswordResetNotification($token) {
        $this->notify(new ResetPasswordNotification($token));
    }
	
}
