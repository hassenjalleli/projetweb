<!DOCTYPE html>

<?PHP
session_start();

        include "compteC.php";

if (isset($_POST['submit'])){

    $user=$_POST['username'];
    $mdp=$_POST['pasword'];
    if(!$_POST['username'] | !$_POST['pasword']){
    
        echo "vĂ©rifier les champs";

    }else{
        $compteC=new compteC();
        $result=$compteC->recuperercompte2($user,$mdp);
        if ($result->fetch() == false)
        {
            echo 'Pas de résultat';
        }else{
            $_SESSION["username"] = $user;
            echo$_SESSION["username"];
           // echo "<a href="dashbord.php?username=$user\"></a>"; 

            header('Location: index2.php');

        }
       
    
        }
    
}

?>