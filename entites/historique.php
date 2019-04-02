<?PHP
class historique{
	private $id;
	private $nom;
	
	function __construct($id,$nom){
		$this->id=$id;
		$this->nom=$nom;
		
	}
	
	function getid(){
		return $this->id;
	}
	function getNom(){
		return $this->nom;
	}


	function setNom($nom){
		$this->nom=$nom;
	}
	function setid($id){
		$this->id=$id;
	}
	
	
}

?>