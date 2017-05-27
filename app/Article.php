<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
        'title',
        'body',
        'published_at',
        'user_id'

    ];

    protected $dates = ['published_at'];

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');

    }

    //relación muchos a muchos
    public function tags()
    {
        return $this->belongsToMany('App\Tag');

    }

    public function getTagListAttribute()
    {

       return $this::pluck('id');
    }

    public function setPublishedAtAttribute($date)
    {

        $this->attributes['published_at'] = Carbon::parse($date); //Esto se hace cuando apretamos submit y se guarda como 00:00:00 la fecha en
        //la base de datos
    }

    public function scopePublished($query)
    {
        $query->where('published_at', '<=', Carbon::now());
    }

    public function scopeUnPublished($query)
    {
        $query->where('published_at', '>=', Carbon::now());
    }
}
