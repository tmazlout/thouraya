<?PHP

session_start();
if(!isset($_SESSION["id"]))
{
	header("Location:login.php");
}
include "../entities/livraison.php";
include "../core/livraisonC.php";
var_dump($_POST);



if (isset($_POST['idlivraison']) and isset($_POST['adressel']) and isset($_POST['numfacture'])  and isset($_POST['message']))
{
//var_dump($_post);
$livraison1=new Livraison(12,$_POST['idlivraison'],$_POST['adressel'],$_POST['numfacture'],1,$_POST['message']);
$livraison1C=new LivraisonC();
$livraison1C->ajouterlivraison($livraison1);
	header('Location: shop.html');
}
/*else if (empty($_POST['phonenumber']) and empty($_POST['adressel']) and empty($_POST['numfacture'])  and empty($_POST['message'])){
		header('Location: ajouterlivraison.html');
	}*/

	

else{
	echo "vérifier les champs";
	
}
//*/

?>