<?php namespace App\Blog;

class ImageThumber 
{
	protected $aspectRatio;
	protected $directory;
	protected $width;
	protected $height;
	public $image;
	protected $sizeDirectory;
	protected $filename;

	
	function __construct($size, $filename)
	{
    	$dims = explode('x', $size);
		$this->width = $dims[0]?:null;
		$this->height = $dims[1]?:null;
		$this->image = \Image::make(base_path() .'/public/images/'.$filename);
		$this->directory = base_path() . '/public/thumb/';
		$this->sizeDirectory = $size;
		$this->filename = $filename;
	}
	public function save()
	{
		$filePath = $this->directory . $this->sizeDirectory."/".$this->filename;
		$this->image->save($filePath);
        chmod($filePath, 0755);   
	}
	public function refactor()
	{
        if($this->isForResize())
        {
            $this->image->resize($this->width,$this->height,$this->aspectRatio());
        }
        if($this->isForThumb())
        {
            $this->image->fit($this->width,$this->height);
        }
	}
	public function aspectRatio()
	{
	 	return function ($constraint) 
		{
	        $constraint->aspectRatio();
	        $constraint->upsize();
	    };
	}
	public function makeThumbDirectory()
	{
        if(!file_exists($this->directory))
        {
    		mkdir($this->directory);
    		chmod($this->directory, 0755);        	
        }		
	}
	public function makeSizeDirectory()
	{
		$folder = $this->directory . $this->sizeDirectory;
        if(!file_exists($folder))
        {
    		mkdir($folder);
    		chmod($folder, 0755);        	
        }
	}
	public function isForResize()
	{
		return (empty($this->width) || empty($this->height));
	}
	public function isForThumb()
	{
		return !(empty($this->width) || empty($this->height));
	}
	public function isValid()
	{
        return ($this->isHeightValid() && $this->isWidthValid());
	}
	protected function isHeightValid()
	{
		return is_numeric($this->height)||is_null($this->height);
	}
	protected function isWidthValid()
	{
		return is_numeric($this->width)||is_null($this->width);
	}    
}