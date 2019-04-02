<?PHP

include "config.php";

class historiqueC {


function afficherhistorique(){
		//$sql="SElECT * From histo e inner join formationphp.livreur a on e.cin= a.cin";
		$sql="SElECT * From historique";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerhistorique($id){
		$sql="DELETE FROM historique where id= :id";
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
}
?>
	