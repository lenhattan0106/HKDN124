<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $reset_id
 * @property integer $user_id
 * @property string $reset_token
 * @property string $expiration
 * @property User $user
 */
class Passwordreset extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'passwordreset';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'reset_id';

    /**
     * @var array
     */
    protected $fillable = ['user_id', 'reset_token', 'expiration'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\Models\User', null, 'user_id');
    }
}
