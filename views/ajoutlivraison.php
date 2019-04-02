<?PHP
include "../entites/compte.php";
include "../core/compteC.php";

if (isset($_POST['id']) && isset($_POST['username']) && isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['pasword'])&& isset($_POST['numero']) && isset($_POST['email']) ){
$compte1=new compte($_POST['id'],$_POST['username'],$_POST['nom'],$_POST['prenom'] ,$_POST['pasword'] ,$_POST['numero'] ,$_POST['email']);
//Partie2
/*
var_dump($compte1);
}
*/
//Partie3
$compte1C=new compteC();
$compte1C->ajoutercompte($compte1);
header('Location: afficherlivraison.php');
	
}else{
	echo "vĂ©rifier les champs";
}
//*/

?>