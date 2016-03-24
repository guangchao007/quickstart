<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    /**
     * Get the user that owns the sub.
     */
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    /**
     * Get the topic of the sub.
     */
    public function topic()
    {
        return $this->belongsTo('App\Models\Topic');
    }
}
