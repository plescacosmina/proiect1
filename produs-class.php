<?php 
    class Produs { 
    var $images;
    var $descriere; 
    var $title;
    
	function Produs ($img,$descr,$titl){
		$this->images=$img;
		$this->descriere=$descr;
		$this->title=$titl;
	}
	
    
   public function getImages() { 
        echo $this->images;
    } 
	public function getDescriere() { 
        echo $this->descriere;
    } 
	public function getTitle() { 
        echo $this->title;
    } 
	
	public function setImages($update) { 
        $this->title=$update;
    } 
	public function setDescriere($update) { 
        $this->descriere=$update;
    } 
	public function setTitle($update) { 
        $this->title=$update;
    } 
	
} 
?>