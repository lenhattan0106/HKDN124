<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $room_id
 * @property string $room_name
 * @property string $created_at
 * @property string $room_type
 * @property integer $participant_count
 * @property Message[] $messages
 * @property Roomparticipant[] $roomparticipants
 */
class Chatroom extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'chatroom';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'room_id';

    /**
     * @var array
     */
    protected $fillable = ['room_name', 'created_at', 'room_type', 'participant_count'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function messages()
    {
        return $this->hasMany('App\Models\Message', 'room_id', 'room_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function roomparticipants()
    {
        return $this->hasMany('App\Models\Roomparticipant', 'room_id', 'room_id');
    }
}
