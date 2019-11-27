<?PHP
include "../config.php";
class LivraisonC {
function afficherlivraisons ($Livraison){
		echo "id livraison: ".$Livraison->getIdlivraison()."<br>";
		echo "adresse livraison: ".$Livraison->getAdressel()."<br>";
		echo "Num facture: ".$Livraison->getNumfacture()."<br>";
		echo "id livreur: ".$Livraison->getIdlivreur()."<br>";
		echo "message: ".$Livraison->getMessage()."<br>";
	}
	function ajouterlivraison($Livraison){
		$sql="insert into livraison (phonenumber,adressel,numfacture,idlivreur,message) values (:phonenumber, :adressel,:numfacture,:idlivreur,:message)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $nbre=$Livraison->getNbre();
        $adressel=$Livraison->getAdressel();
		$numfacture=$Livraison->getNumfacture();
        $idlivreur=$Livraison->getIdlivreur();
        $message=$Livraison->getMessage();
       
		$req->BindValue(':phonenumber',$nbre);
		$req->BindValue(':adressel',$adressel);
		$req->BindValue(':numfacture',$numfacture);
		$req->BindValue(':idlivreur',$idlivreur);
		$req->BindValue(':message',$message);
		
		
            $req->execute();
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherlivraison(){
		
		$sql="SElECT * From livraison";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerlivraison($idlivraison){
		$sql="DELETE FROM livraison where idlivraison= :idlivraison";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':idlivraison',$idlivraison);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierlivraison($Livraison,$idlivraison){
		$sql="UPDATE livraison SET idlivraison=:idlivraison,phonenumber=:phonenumber, adressel=:adressel,numfacture=:numfacture,idlivreur=:idlivreur,message=:message WHERE idlivraison=:idlivraison";
		$db = config::getConnexion();
		
try{		
        $req=$db->prepare($sql);
	    $idlivraison=$Livraison->getIdlivraison();
	$nbre=$Livraison->getNbre();
		$adressel=$Livraison->getAdressel();
		$numfacture=$Livraison->getNumfacture();
		$idlivreur=$Livraison->getIdlivreur();
		$message=$Livraison->getMessage();
		$datas = array( ':idlivraison'=>$idlivraison,
					   ':phonenumber'=>$nbre,
					   ':adressel'=>$adressel,
					   ':numfacture'=>$numfacture,
					   ':idlivreur'=>$idlivreur,
					   ':message'=>$message);
		$req->bindValue(':idlivraison',$idlivraison);
		$req->bindValue(':phonenumber',$nbre);
		$req->bindValue(':adressel',$adressel);
		$req->bindValue(':numfacture',$numfacture);
		$req->bindValue(':idlivreur',$idlivreur);
		$req->bindValue(':message',$message);
		
		
            $s=$req->execute();
			
        }

        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
		

	}

	function recupererlivraison($idlivraison){
		$sql="SELECT * from livraison where idlivraison=$idlivraison";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function rechercherListelivraison($idlivraison){
		$sql="SELECT * from livraison where idlivraison=$livraison";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
}

?>

