<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [

        'email',
        'password',
        'lastname',
        'firstname',
         'middlename',
         'academic_session',
         'matriculation_number',
          'level',
          'gender',
          'college',
          'department',
          'name',
           'status',
         'keyword',
'birthyear',
'entryyear',
'nationality',
'stateoforigin',
'localgovt',
'religion',
'denominations',
'church',
'parish',
'clocation',
'parents',
'wbaptism',
'muslemb4',
'region',
'address_state',
'address_town',
'others',
    ];

    protected $perPage = 2;

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];



    public function setNameAttribute($value)
    {
        $this->attributes['name'] = ucwords(strtolower($value));
    }


        public function setLastnameAttribute($value)
        {
            $this->attributes['lastname'] = ucfirst(strtolower($value));
        }

        public function setFirstnameAttribute($value)
        {
            $this->attributes['firstname'] = ucfirst(strtolower($value));
        }

        public function setMiddlenameAttribute($value)
        {
            $this->attributes['middlename'] = ucfirst(strtolower($value));
        }


        public function setEmailAttribute($value)
        {
            $this->attributes['email'] = strtolower($value);
        }

       /*  public function setImailAttribute($value)
        {
            $this->attributes['imail'] = strtolower($value);
        }

        public function setPasswordAttribute($value)
    {
        if($value != "")
        {
            $this->attributes['password'] = Hash::make($value);
        }
    }

*/

}
