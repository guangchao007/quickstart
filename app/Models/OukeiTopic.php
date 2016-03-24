<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OukeiTopic extends Model
{
    /**
     * Get all of the product's likes.
     */
    public function topics()
    {
        return $this->morphMany('App\Models\Topics', 'target');
    }
}
