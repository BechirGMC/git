
<?PHP
class categorie{
	private $id_cat;
	private $nom;
	
	
	function __construct($id_cat,$nom){
		$this->id=$id;
		$this->nom=$nom;
		}
	function getid(){
		return $this->id;
	}
	
	function getnom(){
		return $this->nom;
	}
}
?>