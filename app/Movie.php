<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'overview', 'poster', 'year', 'director', 'genres'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
     protected $hidden = [
        'created_at', 'updated_at',
    ];
    
    function movies(){
        return $this->belongsTo('App\Movie');
    }
}
