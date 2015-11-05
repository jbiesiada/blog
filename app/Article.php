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
    public function thumb($size)
    {
        $image = Image::where('model_name','=','Article')->where('foreign_id','=',$this->id)->first();        
        if(!empty($image))
            return $image->thumb($size);
        return 'http://placehold.it/'.$size;
    }
    public function image()
    {
        $image = Image::where('model_name','=','Article')->where('foreign_id','=',$this->id)->first();
        if(!empty($image))
            return $image->url;
        return 'http://placehold.it/900x300';
    }
}
