<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Spatie\MediaLibrary\HasMedia\Interfaces\HasMediaConversions;

/**
 * Class Subgenre
 *
 * @package App
 */
class Subgenre extends Model implements HasMediaConversions
{
    use HasMediaTrait;

    /**
     * @var string
     */
    protected $table = 'subgenres';

    /**
     * @var array
     */
    protected $fillable = [
        'name',
        'genre',
        'born',
        'country_of_origin',
        'history',
        'popularity',
        'slug'
    ];

    /**
     * @var bool
     */
    public $timestamps = false;


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function key_albums()
    {
        return $this->belongsToMany(Album::class, 'subgenre_key_albums');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function originators()
    {
        return $this->belongsToMany(Artist::class, 'subgenre_originators', 'subgenre_id', 'artist_id');
    }

    /**
     * Register the conversions that should be performed.
     *
     * @return array
     */
    public function registerMediaConversions()
    {
        $this->addMediaConversion('thumb')
            ->width(400)
            ->height(250)
            ->optimize();
    }
}
