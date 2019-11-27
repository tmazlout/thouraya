<?PHP
class Livraison{
	private $idlivraison;
	private $nbre;
	private $adressel;
	private $numfacture;
	private $idlivreur;
	private $message;
	function __construct($idlivraison,$nbre,$adressel,$numfacture,$idlivreur,$message){
		$this->idlivraison=$idlivraison;
		$this->nbre=$nbre;
		$this->adressel=$adressel;
		$this->numfacture=$numfacture;
		$this->idlivreur=$idlivreur;
		$this->message=$message;
	}

	
	function getIdlivraison(){
		return $this->idlivraison;
	}
	function getAdressel(){
		return $this->adressel;
	}
	function getNumfacture(){
		return $this->numfacture;
	}
	function getIdlivreur(){
		return $this->idlivreur;
	}
	function getMessage(){
		return $this->message;
	}
	function getNbre(){
		return $this->nbre;
	}

	function setIdlivraison($idlivraison){
		$this->idlivraison=$idlivraison;
	}
	function setAdressel($adressel){
		$this->adressel=$adressel;
	}
	function setNumfacture($numfacture){
		$this->numfacture=$numfacture;
	}
	function setIdlivreur($idlivreur){
		$this->idlivreur=$idlivreur;
	}
	function setMessage($message){
		$this->message=$message;
	}
	function setNbre($nbre){
		$this->nbre=$nbre;
	}
	
}

?>