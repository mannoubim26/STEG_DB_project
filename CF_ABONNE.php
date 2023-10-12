<!DOCTYPE html>
<html>
  <head>
    <title>Training Application Form</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <style>
      html, body {
      min-height: 100%;
      background-color: #075a6c;
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
      background: #ffffff;
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
      background-color: rgba(6, 55, 92, 0.9); 
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
            CF_ABONNE</h1>
        </div>
        <h2>Inserer les données</h2>
        <div style="margin-left: 1cm;">
        <div class="form-group c1 required" data-cid="c1">
        RC_UR_CODE :
        <input type="text" name="RC_Ur_CODE"></div>
        <div class="form-group c2 required" data-cid="c2">

          RC_ETAT_CODE :
        <input type="text" name="RC_PAY_CODE">     
      </div>
        
      <div class="form-group c1 required" data-cid="c1">
        RC_BQ_CODBQUE :
        <input type="text" name="RC_BQ_CODBQUE"></div>
      </div>  
        <div class="form-group c2 required" data-cid="c2">

          CF_AB_SOLDE_FINAL :
        <input type="text" name="CF_AB_SOLDE_FINAL">     
      </div>
      <div class="form-group c1 required" data-cid="c1">
        CF_AB_REF :
        <input type="text" name="CF_AB_REF"></div>
        <div class="form-group c2 required" data-cid="c2">

          CF_AB_NUM_COMPTE :
        <input type="text" name="CF_AB_NUM_COMPTE">     
      </div>
      <div class="form-group c1 required" data-cid="c1">
        CF_AB_NUMTEL_MOBILE :
        <input type="text" name="CF_AB_NUMTEL_MOBILE"></div>
       
    
        <div class="form-group c2 required" data-cid="c2">

          CF_AB_NOM_FR :
        <input type="text" name="CF_AB_NOM_FR">     
      </div>
      <div class="form-group c1 required" data-cid="c1">
        CF_AB_MATRICULE_FISCAL :
        <input type="text" name="CF_AB_MATRICULE_FISCAL"></div>
        <div class="form-group c2 required" data-cid="c2">

          CF_AB_LOCALITE_FR :
        <input type="text" name="CF_AB_LOCALITE_FR">     
      </div>
        <div class="form-group c2 required" data-cid="c2">

          CF_AB_IDUTILISATEUR :
        <input type="text" name="CF_AB_IDUTILISATEUR">     
      </div>
      
        <div class="form-group c1 required" data-cid="c1">

          CF_AB_EMAIL :
        <input type="text" name="CF_AB_EMAIL">     
      </div>
        <div class="form-group c2 required" data-cid="c2">
          CF_AB_DAT_CREATION :
        <input type="text" name="CF_AB_DAT_CREATION">     
      </div>
      <div class="form-group c1 required" data-cid="c1">
        CF_AB_DATMAJ :
        <input type="text" name="CF_AB_DATMAJ"></div>
        <div class="form-group c2 required" data-cid="c2">

          CF_AB_CODE_POSTAL :
        <input type="text" name="CF_AB_CODE_POSTAL">     
      </div>
      <div class="form-group c1 required" data-cid="c1">
        CF_AB_CODE :
        <input type="text" name="CF_AB_CODE"></div>
        <div class="form-group c2 required" data-cid="c2">
          CF_AB_CLE_COMPTE :
          <input type="text" name="CF_AB_CLE_COMPTE"></div>
          <div class="form-group c1 required" data-cid="c1">    
        </div>
        <div class="form-group c2 required" data-cid="c2">
          CF_AB_CIN :
        <input type="text" name="CF_AB_CIN">     
      </div>
      <div class="form-group c1 required" data-cid="c1">
        CF_AB_ADRESS_FR :
        <input type="text" name="CF_AB_ADRESS_FR"></div>
       
      

    
    </div>
    <br>
    <input style="margin-left: 2cm;background-color: #b90808;color:#ffff;" type="submit" name="inserer" value="INSERER">
      </form>
    </div>
  </body>
</html>
<?php
$bdd = new PDO('mysql:host=localhost;dbname=stage', 'abonne_steg', 'mannoubi12345@');
if (isset($_POST['inserer'])) {
  $rc_ur_code = $_POST['RC_Ur_CODE'];
  $rc_ur_code = $_POST['RC_PAY_CODE'];
  $rc_bq_codbque = $_POST['RC_BQ_CODBQUE'];
  $cf_ab_solde_final = $_POST['CF_AB_SOLDE_FINAL'];
  $cf_ab_ref = $_POST['CF_AB_REF'];
  $cf_ab_num_compte = $_POST['CF_AB_NUM_COMPTE'];
  $cf_ab_numtel_mobile = $_POST['CF_AB_NUMTEL_MOBILE'];
  $cf_ab_nom_fr = $_POST['CF_AB_NOM_FR'];
  $CF_AB_MATRICULE_FISCAL = $_POST['CF_AB_MATRICULE_FISCAL'];
  $CF_AB_LOCALITE_FR = $_POST['CF_AB_LOCALITE_FR'];
  $CF_AB_IDUTILISATEUR = $_POST['CF_AB_IDUTILISATEUR'];
  $CF_AB_EMAIL = $_POST['CF_AB_EMAIL'];
  $CF_AB_DAT_CREATION = $_POST['CF_AB_DAT_CREATION'];
  $CF_AB_DATMAJ = $_POST['CF_AB_DATMAJ'];
  $CF_AB_CODE_POSTAL = $_POST['CF_AB_CODE_POSTAL'];
  $CF_AB_CODE = $_POST['CF_AB_CODE'];
  $CF_AB_CLE_COMPTE = $_POST['CF_AB_CLE_COMPTE'];
  $CF_AB_CIN = $_POST['CF_AB_CIN'];
  $CF_AB_ADRESS_FR = $_POST['CF_AB_ADRESS_FR'];
  $sql="insert into cf_abonne values(:RC_UR_CODE,:RC_PAY_CODE,:RC_BQ_CODBQUE,:CF_AB_SOLDE_FINAL,:CF_AB_REF
  ,:CF_AB_NUM_COMPTE,:CF_AB_NUMTEL_MOBILE,:CF_AB_NOM_FR,:CF_AB_MATRICULE_FISCAL, :CF_AB_LOCALITE_FR,:CF_AB_IDUTILISATEUR,:CF_AB_EMAIL,:CF_AB_DATMAJ,:CF_AB_CODE_POSTAL,:CF_AB_CODE,:CF_AB_CLE_COMPTE,:CF_AB_CIN,:CF_AB_ADRESS_FR)";
  $stmt = $bdd->prepare($sql);
  $stmt->bindParam(':RC_Ur_CODE', $RC_Ur_CODE);
    $stmt->bindParam(':RC_PAY_CODE', $RC_PAY_CODE);
    $stmt->bindParam(':RC_BQ_CODBQUE', $RC_BQ_CODBQUE);
    $stmt->bindParam(':CF_AB_SOLDE_FINAL', $CF_AB_SOLDE_FINAL);
    $stmt->bindParam(':CF_AB_REF', $CF_AB_REF);
    $stmt->bindParam(':CF_AB_NUM_COMPTE', $CF_AB_NUM_COMPTE);
    $stmt->bindParam(':CF_AB_NUMTEL_MOBILE', $CF_AB_NUMTEL_MOBILE);
    $stmt->bindParam(':CF_AB_NOM_FR', $CF_AB_NOM_FR);
    $stmt->bindParam(':CF_AB_MATRICULE_FISCAL', $CF_AB_MATRICULE_FISCAL);
    $stmt->bindParam(':CF_AB_LOCALITE_FR', $CF_AB_LOCALITE_FR);
    $stmt->bindParam(':CF_AB_IDUTILISATEUR', $CF_AB_IDUTILISATEUR);
    $stmt->bindParam(':CF_AB_DAT_CREATION', $CF_AB_DAT_CREATION);
    $stmt->bindParam(':CF_AB_CODE_POSTAL', $CF_AB_CODE_POSTAL);
    $stmt->bindParam(':CF_AB_CODE', $CF_AB_CODE);
    $stmt->bindParam(':CF_AB_CLE_COMPTE', $CF_AB_CLE_COMPTE);
    $stmt->bindParam(':CF_AB_CIN', $CF_AB_CIN);
    $stmt->bindParam(':CF_AB_ADRESS_FR', $CF_AB_ADRESS_FR);
    if ($stmt->execute()) {
        echo 'Data inserted successfully!';
    } else {
        echo 'Failed to insert data';
    }


  }

?>
