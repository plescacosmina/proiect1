<?php 
    class Comment { 
    var $id;
    var $produsid; 
    var $comment;
    
	function Comment ($commid,$produs,$comm){
		$this->id=$commid;
		$this->produsid=$produs;
		$this->comment=$comm;
	}
	
    
   public function getId() { 
        echo $this->id;
    } 
	public function getProdusId() { 
        echo $this->produsid;
    } 
	public function getComment() { 
        echo $this->comment;
    } 
	
	public function setId($update) { 
        $this->title=$update;
    } 
	public function setProdusId($update) { 
        $this->descriere=$update;
    } 
	public function setComment($update) { 
        $this->title=$update;
    } 
	
} 
?>