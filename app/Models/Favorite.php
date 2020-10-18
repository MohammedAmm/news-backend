<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Favorite extends Model
{
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'author', 'content','url_to_image','url','published_at','user_id'
    ];

    /**
     * Relations
     */

    /**
     * Get favorite's user.
     */
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }


}
