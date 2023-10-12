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
      margin-bottom: 15px;
      border: 1px solid #ccc;
      border-radius: 3px;
      }
      input {
      width: calc(100% - 10px);
      padding: 15px;
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
      <form style="margin-top:3cm" action="" method="post">
        <div class="banner">
          <h1>
            apply masking</h1>
        </div>
        <br>
<h1 style="color:black;">What do I need to know about data masking?</h1><br><br>
Data masking does not just replace sensitive data with blanks. It creates characteristically intact, but inauthentic, replicas of personally identifiable data or other highly sensitive data in order to uphold the complexity and unique characteristics of data. In this way, tests performed on properly masked data will yield the same results as they would on the authentic dataset.<br>
            <input type="submit" style="background-color:blue;color:white;margin-left:2cm;" name="submit" value="Apply Masking">
       
      </div></div>
      
    
      </form>
    </div>
  </body>
</html>
<?php
function maskData($data) {  
    return '*****' . substr($data, -3);
}
    if (isset($_POST['submit'])) {

    $bdd = new PDO('mysql:host=localhost;dbname=stage', 'abonne_steg', 'mannoubi12345@');

// Select the data from the table
$stmt = $bdd->query('SELECT * FROM bt_releveur');
$data = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Loop through each row of data
foreach ($data as $row) {
    // Apply the masking function to the data
    $armaskedData = maskData($row['BT_RELV_NOM_PRENOM_AR']);
    echo'$armaskedData';
    $frmaskedData = maskData($row['BT_RELV_NOM_PRENOM_FR']);
    echo'$frmaskedData';


    // Update the table with the masked data
    $sql = "UPDATE bt_releveur SET BT_RELV_NOM_PRENOM_AR =:BT_RELV_NOM_PRENOM_AR, BT_RELV_NOM_PRENOM_FR = :BT_RELV_NOM_PRENOM_FR WHERE RC_UR_CODE = :RC_UR_CODE";
    $stmt = $bdd->prepare($sql);
    $stmt->bindValue(':BT_RELV_NOM_PRENOM_AR', $armaskedData, PDO::PARAM_STR);
    $stmt->bindValue(':BT_RELV_NOM_PRENOM_FR', $frmaskedData, PDO::PARAM_STR);
    $stmt->bindValue(':RC_UR_CODE', $row['RC_UR_CODE'], PDO::PARAM_INT);
    $stmt->execute();
}

 }
?>
