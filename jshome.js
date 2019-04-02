function admin(){
    var username = document.getElementById("username").value+"";
    var mdp = document.getElementById("mdp").value+"";
    if (username =="admin" &&  mdp =="admin"){
        alert("admin");
        location.href("index3.php");
    }else{
        alert("sorry , privet");
    }
}