<?PHP
include "../core/historiqueC.php";
$historiqueC=new historiqueC();
if (isset($_POST["id"])){
	$historiqueC->supprimerhistorique($_POST["id"]);
	header('Location: ../indexhistorique.php');
}

?>