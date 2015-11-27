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

	
	function __construct($size, $image, $filename)
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
		$filePath = $this->directory . $this->sizeDirectory."/".$this->getFilename();
		$this->image->save($filePath);
        chmod($filePath, 0755);   
	}
	public function refactor()
	{
        if($this->isForResize())
        {
            $this->image->resize($this->getWidth(),$this->getHeight(),$this->aspectRatio());
        }
        if($this->isForThumb())
        {
            $this->image->fit($this->getWidth(),$this->getHeight());
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
		return (empty($this->getWidth()) || empty($this->getHeight()));
	}
	public function isForThumb()
	{
		return !(empty($this->getWidth()) || empty($this->getHeight()));
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

    /**
     * Gets the value of width.
     *
     * @return mixed
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * Sets the value of width.
     *
     * @param mixed $width the width
     *
     * @return self
     */
    protected function setWidth($width)
    {
        $this->width = $width;

        return $this;
    }

    /**
     * Gets the value of height.
     *
     * @return mixed
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * Sets the value of height.
     *
     * @param mixed $height the height
     *
     * @return self
     */
    protected function setHeight($height)
    {
        $this->height = $height;

        return $this;
    }

    /**
     * Gets the value of filename.
     *
     * @return mixed
     */
    public function getFilename()
    {
        return $this->filename;
    }

    /**
     * Sets the value of filename.
     *
     * @param mixed $filename the filename
     *
     * @return self
     */
    protected function setFilename($filename)
    {
        $this->filename = $filename;

        return $this;
    }
}