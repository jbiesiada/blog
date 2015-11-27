<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Blog\ImageThumber;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
	public function __construct() 
	{
        $this->middleware('auth',['except' => 'thumb']);
	}
    public function index()
    {
        return view('admin.index');
    }
    public function thumb($size,$filename)
    {
        $imageThumber = new ImageThumber($size, $filename);
        if(!$imageThumber->isValid())
            return new Exception("Wrong image size");
        $imageThumber->makeThumbDirectory();
        $imageThumber->refactor();
        $imageThumber->makeSizeDirectory();
        $imageThumber->save();                
		return $imageThumber->image->response('jpg');
	}
}
