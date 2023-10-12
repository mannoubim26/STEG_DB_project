<form action="" method="post">
<input type="text" name="userr" id="userr">
<input type="password" name="pass" id="pass">
<input type="submit" name="submit" value="inserer">
</form>
<?php
    $bdd = new PDO('mysql:host=localhost;dbname=stage', 'abonne_steg', 'mannoubi12345@');
  $Code=$_POST['userr'];
  $pass=$_POST['pass'];
 $req="insert into utilisateur values('$userr','$pass')";

 $result=$bdd->exec($req);

 if ($result) {
     echo "<br>Insertion  avec Succès ! ";
 }else{
     echo "<br>Insertion Echouée ! ";
 }
?>