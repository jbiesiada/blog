<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
	public function __construct() 
	{
        $this->middleware('auth');
        // $this->middleware('writer');
	}
    public function index()
    {
        return view('admin.index');
    }

    public function thumb($size,$filename){
    	$dims = explode('x', $size);
        $check = true;
        if(count($dims)!='2')
            $check = false;
        else
        {            
            foreach ($dims as $dim)
            {
                if(!is_numeric($dim)&&!empty($dim))
                {
                    $check = false;
                }
            }
        }
        if(!$check)
            return null;
        $xsize = $dims[0];
        $ysize = $dims[1];

        $folder = base_path() . '/public/thumb/';
        if(!file_exists($folder))
        {
    		mkdir($folder);
    		chmod($folder, 0755);        	
        }
        $image = \Image::make(base_path() .'/public/images/'.$filename);
        $calb = function ($constraint) {
            $constraint->aspectRatio();
            $constraint->upsize();
        };
        if(!empty($xsize) && empty($ysize) || $image->width()<$image->height())
        {
            $image->resize($xsize,null,$calb);
        }
        if(empty($xsize) && !empty($ysize) ||$image->width()>=$image->height())
        {
            $image->resize(null,$ysize,$calb);
        }

        if(!empty($xsize) && !empty($ysize))
        {            
            $image->crop($xsize,$ysize);            
        }

        $folder = base_path() . '/public/thumb/'. $size;
        if(!file_exists($folder))
        {
    		mkdir($folder);
    		chmod($folder, 0755);        	
        }
        $image->save($folder."/".$filename);
        chmod($folder."/".$filename, 0755);           
		return $image->response('jpg');
	}
}
