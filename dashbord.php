<!DOCTYPE html>

<html lang="en">
    <head>
        <title>negra</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/stylehome.css">

        <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
        
      </head>
      <body>

       
        
        <nav id="mynav"  class="navbar navbar-inverse  navbar-fixed-top col-md-12"  >
            <div class="container-fluid" >
              <div class="navbar-header" >
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>                        
                </button>
                <a  class="navbar-brand"  href="#"  style="color:black" >GALAXY-Design</a>
              </div>
              <div class="collapse navbar-collapse" id="myNavbar" >
                <ul class="nav navbar-nav " style="padding-left:350px;">
                  <li  class="home active" class="text-center"><a href="#home">dashbord</a></li>
                  <li class="pull-right" ><a    href="#"style="color:black;" data-toggle="modal" data-target="#myModal">Shop</a></li>
                  <li ><a id="aboutus " href="#about" style="color:black;">about </a></li>  
                  <li ><a href="#contact"  style="color:black;">contact </a></li>     
   
               </ul>
                <ul class="nav navbar-nav navbar-right">

                    <li><a  id="sign-up"href="home.html"   ><span class="glyphicon glyphicon-user"></span> log out</a></li>

                  
                    <!--njareb fi faza-->
                   
                      
                          <!--<div class="container" style="background-color:#f1f1f1">
                            <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
                            <span class="psw">Forgot <a href="#">password?</a></span>
                          </div>-->
                        </form>
                      
                   
                      <form>
                          
                      </form>
                      
                      
                </div>
                  
                <!--kamalet el faza -->
                </ul>
              </div>
            </div>
          </nav>

          <!-- njareb fi faza !-->
         

      </body>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
      <script src="./js/jshome.js"></script>

</html>
<?PHP
session_start();

        include "compteC.php";

        echo "<br> <br> <br> <br>";
         
$username=$_SESSION["username"];

        $sql="SElECT * From compte where username='".$username."'";

		$db = config::getConnexion();
		
		$liste=$db->query($sql);
        
        
        //var_dump($listelivraisons->fetchAll());
        ?>
		<div class="col-md-6">
    <div class="panel panel-default">
		 <div class="panel-heading">
       welcom in dashbord
    </div>
    
<div >
       
        <?PHP
foreach($liste as $row){
	?>
        <tbody>
           
            <tr>
            <td><?PHP echo "iD" ?></td>

            <td><?PHP echo $row['id']; ?></td>
            <br>
            <td><?PHP echo "username" ?></td>
    <td><?PHP echo $row['username']; ?></td>
    <br>
    <td><?PHP echo "nom" ?></td>
	<td><?PHP echo $row['nom']; ?></td>
    <br>
    <td><?PHP echo "prenom" ?></td>
	<td><?PHP echo $row['prenom']; ?></td>
    <br>
    <td><?PHP echo "password" ?></td>
	<td><?PHP echo $row['pasword']; ?></td>
    <br>
    <td><?PHP echo "numero" ?></td>
    <td><?PHP echo $row['numero']; ?></td>
    <br>
    <td><?PHP echo "email" ?></td>
    <td><?PHP echo $row['email']; ?></td>
    <br>
                <td><form method="POST" action="supprimercompte.php">
	<input type="submit" name="supprimer" value="supprimer">
	<input type="hidden" value="<?PHP echo $row['id']; ?>" name="id">
	</form>
	</td>
	<td><a href="modifiercompte_utlisateur.php?id=<?PHP echo $row['id']; ?>">
	Modifier</a></td>
            </tr>
           
        </tbody>
        <?PHP
    }
    ?>