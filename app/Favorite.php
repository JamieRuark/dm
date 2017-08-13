<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Favorite
 *
 * @package App
 */
class Favorite extends Model
{
    /**
     * @var string
     */
    protected $table = 'favorites';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\MorphTo
     */
    public function favoritable()
    {
        return $this->morphTo();
    }
}
