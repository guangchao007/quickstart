<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{

    /**
     * Get all of the target models.
     */
    public function target()
    {
        return $this->morphTo();
    }
}
