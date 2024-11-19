<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $attachment_id
 * @property integer $message_id
 * @property string $file_url
 * @property string $file_type
 * @property integer $file_size
 * @property Message $message
 */
class Attachment extends Model
{
    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'attachment_id';

    /**
     * @var array
     */
    protected $fillable = ['message_id', 'file_url', 'file_type', 'file_size'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function message()
    {
        return $this->belongsTo('App\Models\Message', null, 'message_id');
    }
}
