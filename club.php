class Club{
private $id;
private $nom;
private $prenom;
private $adresse;
private $domaine;
function __constract($id, $nom, $description,$adresse, $domaine)
$this->id=$id;
$this->nom=$nom;
$this->prenom=$prenom;
$this->adresse=$adresse;
$this->domaine=$domaine;

}
function getId(){
	$this->id;
}
function getNom(){
	$this->nom;
}
function getDescription(){
	$this->prenom;
}
function getAdresse(){
	$this->adresse;
}
function getDomaine(){
	$this->domaine;
}
function afficherClub (){
	echo "<b> id: </b>.$this->id."<br>;
	echo "<b> Nom: </b>.$this->nom."<br>;
	echo "<b> Prenom: </b>.$this->prenom."<br>;
	echo "<b> Adresse: </b>.$this->adresse."<br>;
	echo "<b> Domaine: </b>.$this->domaine."<br>;
}