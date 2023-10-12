<!DOCTYPE html>
<html>
  <head>
    <title>Training Application Form</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <style>
      html, body {
      min-height: 100%;
      background-color:#075a6c;
      }
      body, div, form, input, select, p { 
      padding: 0;
      margin: 0;
      outline: none;
      font-family: Roboto, Arial, sans-serif;
      font-size: 14px;
      color: #666;
      line-height: 22px;
      }
      h1 {
      position: absolute;
      margin: 0;
      font-size: 32px;
      color: #fff;
      z-index: 2;
      }
      h2 {
      font-weight: 400;
      }
      .testbox {
      display: flex;
      justify-content: center;
      align-items: center;
      height: inherit;
      padding: 20px;
      }
      form {
        margin-left: 6cm;
        margin-right: 6cm;
      width: 100%;
      padding: 20px;
      border-radius: 6px;
      background: #fff;
      box-shadow: 0 0 20px 0 #095484; 
      }
      .banner {
      position: relative;
      height: 210px;
       
      background-size: cover;
      display: flex;
      justify-content: center;
      align-items: center;
      text-align: center;
      }
      .banner::after {
      content: "";
      background-color:  rgba(6, 55, 92, 0.9); 
      position: absolute;
      width: 100%;
      height: 100%;
      }
      input, select {
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 3px;
      }
      input {
      width: calc(100% - 10px);
      padding: 5px;
      }
      select {
      width: 100%;
      padding: 7px 0;
      background: transparent;
      }
      .item:hover p, .item:hover i, .question:hover p, .question label:hover, input:hover::placeholder, a {
      color: #095484;
      }
      .item input:hover, .item select:hover {
      border: 1px solid transparent;
      box-shadow: 0 0 6px 0 #095484;
      color: #095484;
      }
      .item {
      position: relative;
      margin: 10px 0;
      }
      input[type="date"]::-webkit-inner-spin-button {
      display: none;
      }
      .item i, input[type="date"]::-webkit-calendar-picker-indicator {
      position: absolute;
      font-size: 20px;
      color: #a9a9a9;
      }
      .item i {
      right: 2%;
      top: 30px;
      z-index: 1;
      }
      [type="date"]::-webkit-calendar-picker-indicator {
      right: 1%;
      z-index: 2;
      opacity: 0;
      cursor: pointer;
      }
      
     
     
      @media (min-width: 568px) {
      .name-item, .city-item {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      }
    }
      @media only screen and (min-width : 768px) {

.form-group.c1,
.form-group.c2{
  display:inline-block;
  width:48%;
  vertical-align: top;
}

}
input{
  width: 80%;
}

    </style>
  </head>
  <body>
    <div class="testbox">
      <form action="" method="post">
        <div class="banner">
          <h1>
            BT_RELEVEUR</h1>
        </div>
        <h2>Inserer les données</h2>
        <div style="margin-left: 1cm;">
        <div class="form-group c1 required" data-cid="c1">
            BT_RELV_IDUTILISATEUR : 
        <input type="text" name="BT_RELV_IDUTILISATEUR"></div>
        <div class="form-group c2 required" data-cid="c2">

            BT_RELV_MATCLE :
        <input type="text" name="BT_RELV_MATCLE">     
      </div>
      <div class="form-group c1 required" data-cid="c1">
        BT_RELV_MATRICULE :
        <input type="text" name="BT_RELV_MATRICULE"></div>
        <div class="form-group c2 required" data-cid="c2">

            BT_RELV_NOM_PRENOM_AR :
        <input type="text" name="BT_RELV_NOM_PRENOM_AR">     
      </div>
      <div class="form-group c1 required" data-cid="c1">
        BT_RELV_NOM_PRENOM_FR :
        <input type="text" name="BT_RELV_NOM_PRENOM_FR"></div>
        <div class="form-group c2 required" data-cid="c2">

            BT_RELV_UF_CODE :
        <input type="text" name="BT_RELV_UF_CODE">     
      </div>
       <div class="form-group c1 required" data-cid="c1">
        RC_UR_CODE :
        <input type="text" name="RC_UR_CODE"></div>
    </div>
    <div class="form-group c2 required" data-cid="c2">
            CF_AB_REF :<br>
        <input type="text" name="CF_AB_REF">     
      </div>  
    <br> <input style="margin-left: 2cm;background-color: #b90808;color:#ffff;" type="submit" name="inserer" value="INSERER">
      </form>
    </div>
  </body>
</html>
<?php
$bdd = new PDO('mysql:host=localhost;dbname=stage', 'abonne_steg', 'mannoubi12345@');
$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if (isset($_POST['inserer'])) {
  $BT_RELV_IDUTILISATEUR = $_POST['BT_RELV_IDUTILISATEUR'];
  $BT_RELV_MATCLE = $_POST['BT_RELV_MATCLE'];
  $BT_RELV_MATRICULE = $_POST['BT_RELV_MATRICULE'];
  $BT_RELV_NOM_PRENOM_AR= $_POST['BT_RELV_NOM_PRENOM_AR'];
  $BT_RELV_NOM_PRENOM_FR = $_POST['BT_RELV_NOM_PRENOM_FR'];

  $BT_RELV_UF_CODE = $_POST['BT_RELV_UF_CODE'];
  $RC_UR_CODE = $_POST['RC_UR_CODE'];
  $CF_AB_REF = $_POST['CF_AB_REF'];
  $sql = "INSERT INTO bt_releveur values(:BT_RELV_IDUTILISATEUR,:BT_RELV_MATCLE,:BT_RELV_MATRICULE,:BT_RELV_NOM_PRENOM_AR,:BT_RELV_NOM_PRENOM_FR,:BT_RELV_UF_CODE,:RC_UR_CODE,:CF_AB_REF)";
  $stmt = $bdd->prepare($sql);
  $stmt->bindParam(':BT_RELV_IDUTILISATEUR', $BT_RELV_IDUTILISATEUR);
    $stmt->bindParam(':BT_RELV_MATCLE', $BT_RELV_MATCLE);
    $stmt->bindParam(':BT_RELV_MATRICULE', $BT_RELV_MATRICULE);
    $stmt->bindParam(':BT_RELV_NOM_PRENOM_AR', $BT_RELV_NOM_PRENOM_AR);
    $stmt->bindParam(':BT_RELV_NOM_PRENOM_FR', $BT_RELV_NOM_PRENOM_FR);
    $stmt->bindParam(':BT_RELV_UF_CODE', $BT_RELV_UF_CODE);
    $stmt->bindParam(':RC_UR_CODE', $RC_UR_CODE);
    $stmt->bindParam(':CF_AB_REF', $CF_AB_REF);
    if ($stmt->execute()) {
        echo 'Data inserted successfully!';
    } else {
        echo 'Failed to insert data';
    }


  }

?>









