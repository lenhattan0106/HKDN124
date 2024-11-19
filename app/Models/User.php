<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $user_id
 * @property string $username
 * @property string $password_hash
 * @property string $email
 * @property string $role
 * @property string $created_at
 * @property string $status
 * @property string $last_login
 * @property Message[] $messages
 * @property Passwordreset[] $passwordresets
 * @property Roomparticipant[] $roomparticipants
 * @property Userpermission[] $userpermissions
 */
class User extends Model
{
    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'user_id';

    /**
     * @var array
     */
    protected $fillable = ['username', 'password_hash', 'email', 'role', 'created_at', 'status', 'last_login'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function messages()
    {
        return $this->hasMany('App\Models\Message', null, 'user_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function passwordresets()
    {
        return $this->hasMany('App\Models\Passwordreset', null, 'user_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function roomparticipants()
    {
        return $this->hasMany('App\Models\Roomparticipant', null, 'user_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function userpermissions()
    {
        return $this->hasMany('App\Models\Userpermission', null, 'user_id');
    }
}
