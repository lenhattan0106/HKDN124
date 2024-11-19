<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $permission_id
 * @property integer $user_id
 * @property boolean $can_chat
 * @property boolean $can_delete_message
 * @property boolean $can_create_room
 * @property boolean $can_add_user_to_room
 * @property boolean $can_delete_user_to_room
 * @property User $user
 */
class Userpermission extends Model
{
    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'permission_id';

    /**
     * @var array
     */
    protected $fillable = ['user_id', 'can_chat', 'can_delete_message', 'can_create_room', 'can_add_user_to_room', 'can_delete_user_to_room'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\Models\User', null, 'user_id');
    }
}
