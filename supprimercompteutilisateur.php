<?PHP
include "compteC.php";
$compteC=new compteC();
if (isset($_POST["id"])){
	$compteC->supprimercompte($_POST["id"]);
	header('Location: home.html');

}

?>