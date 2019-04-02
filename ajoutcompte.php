<?PHP
include "entites/compte.php";
include "compteC.php";

if (isset($_POST['id']) && isset($_POST['username']) && isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['pasword'])&& isset($_POST['numero']) && isset($_POST['email']) ){
//Partie2

$id=$_POST['id'];
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$username=$_POST['username'];
$pasword=$_POST['pasword'];
$numero=$_POST['numero'];
$email=$_POST['email'];
$arobase = "@";
$point =".";
$x=strpos($email,$arobase) ;
$p=strpos($email,$point) ;
$l=strlen($email);
$pas=strlen($pasword);


if($x!= 0 && $p>0  && $l-1 > $p && $pas > 5 ){
$compte1=new compte($id,$username,$nom,$prenom ,$pasword ,$numero ,$email);
var_dump($compte1);
//////email////////


$compte1C=new compteC();
$compte1C->ajoutercompte($compte1);

//header('Location: home.html');
}else {
	echo "<script>alert(\"mail incorrecte \")</script>";

}	
}else{
	echo "vĂ©rifier les champs";
}
//*/

?>