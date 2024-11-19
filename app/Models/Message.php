<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $message_id
 * @property integer $room_id
 * @property integer $user_id
 * @property string $content
 * @property string $message_type
 * @property string $timestamp
 * @property boolean $is_pinned
 * @property Attachment[] $attachments
 * @property Chatroom $chatroom
 * @property User $user
 */
class Message extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'message';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'message_id';

    /**
     * @var array
     */
    protected $fillable = ['room_id', 'user_id', 'content', 'message_type', 'timestamp', 'is_pinned'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function attachments()
    {
        return $this->hasMany('App\Models\Attachment', null, 'message_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function chatroom()
    {
        return $this->belongsTo('App\Models\Chatroom', 'room_id', 'room_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\Models\User', null, 'user_id');
    }
}
