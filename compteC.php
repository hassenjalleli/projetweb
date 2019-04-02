<?PHP
include "config.php";
class compteC {

	function ajoutercompte($compte){
		$db = config::getConnexion();

		$sql='insert into compte (id,username,nom,prenom,pasword,numero,email) values (:id,:username,:nom,:prenom,:pasword,:numero,:email)';
		try{
        $req=$db->prepare($sql);
		
        $id=$compte->getid();
		$username=$compte->getusername();
		$nom=$compte->getnom();
		$prenom=$compte->getprenom();
		$pasword=$compte->getpasword();
		$numero=$compte->getnumero();
		$email=$compte->getemail();
		$req->bindValue(':id',$id);
		$req->bindValue(':username',$username);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':prenom',$prenom);
		$req->bindValue(':pasword',$pasword);
		$req->bindValue(':numero',$numero);
		$req->bindValue(':email',$email);		
            $req->execute();
		
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function affichercompte(){
		$sql="SElECT * From compte";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
		catch (Exception $e){
			die('Erreur: '.$e->getMessage());
		}	
	}
	function supprimercompte($id){
		$sql="DELETE FROM compte where id= :id";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id',$id);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
function modifiercompte($compte,$id){
		$sql="UPDATE compte SET id=:id,username=:username,nom=:nom,prenom=:prenom,pasword=:pasword,numero=:numero,email=:email WHERE id=:id";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$id=$compte->getid();
		$username=$compte->getusername();
		$nom=$compte->getnom();
		$prenom=$compte->getprenom();
        $pasword=$compte->getpasword();
        $numero=$compte->getnumero();
		$email=$compte->getemail();
		$datas = array( ':id'=>$id, ':nom'=>$nom,':prenom'=>$prenom,':pasword'=>$pasword,':numero'=>$numero,':email'=>$email);
		
		$req->bindValue(':id',$id);
		$req->bindValue(':username',$username);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':prenom',$prenom);
		$req->bindValue(':pasword',$pasword);
		$req->bindValue(':numero',$numero);	
        $req->bindValue(':email',$email);			
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recuperercompte($id){
		$sql="select * from compte where id='".$id."'";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
			die('Erreur: '.$e->getMessage());
        }
	}
	function recuperercompte2($username,$pasword){
		$sql="select * from compte where username='".$username."' and pasword='".$pasword."'";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
			die('Erreur: '.$e->getMessage());
        }
	}
	function rechercherListecompte($username){
		$sql="select * from compte where username=$username";
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