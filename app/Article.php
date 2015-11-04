<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
    	'title',
    	'body'
    ];
    public function shortbody()
    {
    	return str_limit($this->body, $limit = 100, $end = '...');
    }
    public function user()
    {
    	return $this->belongsTo('App\User');
    }
    public function comments()
    {
        return $this->hasMany('App\Comment')->latest();
    }
    public function thumb()
    {
        if(!empty($this->image))
            return $this->image;
        return 'http://placehold.it/64x64';
    }
    public function image()
    {
        if(!empty($this->image))
            return $this->image;
        return 'http://placehold.it/900x300';
    }
}
