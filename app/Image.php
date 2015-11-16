<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
   	protected $fillable = ['model_name','foreign_id','url'];

   	public static function upload($request,$model)
   	{
        if(!empty($request->file('image')))
        {
        	$model_name = get_class($model);
        	$model_name = explode("\\", $model_name);
        	$model_name = $model_name[count($model_name)-1];
            $imageName = $model->id .'_'.date('Y_m_d').'_'.strtr($request->file('image')->getClientOriginalName(), ' ', '_');
            $request->file('image')->move(
                base_path() . '/public/images/', $imageName
            );
            chmod(base_path() . '/public/images/'. $imageName, 0755);
            $image = Image::where('model_name','=',$model_name)->where('foreign_id','=',$model->id)->first();
            if(empty($image))
            {            	
	            $image = Image::create([
	                'model_name' => $model_name,
	                'foreign_id' => $model->id,
	                'url' => '/images/'. $imageName,
	            ]);
            }
            else
            {
            	$image->url = '/images/'. $imageName;
            	$image->save();
            }
        }
   	}
    public function filename()
    {
        if(!empty($this->url))
        {
            $url = explode("/", $this->url);
            return $url[count($url)-1];
        }
        return null;
    }
    public function thumb($size)
    {
        return "/thumb/".$size."/".$this->filename();
    }
    public function kill()
    {
        $this->delete();
    }
}
