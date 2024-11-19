<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $room_id
 * @property integer $user_id
 * @property string $joined_at
 * @property boolean $is_admin
 * @property User $user
 * @property Chatroom $chatroom
 */
class Roomparticipant extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['joined_at', 'is_admin'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\Models\User', null, 'user_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function chatroom()
    {
        return $this->belongsTo('App\Models\Chatroom', 'room_id', 'room_id');
    }
}
