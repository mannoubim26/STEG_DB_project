<style>
        @import "compass/css3";
     *, *:before, *:after {
         box-sizing: border-box;
    }
     html {
         overflow-y: scroll;
    }
     body {
         background: #075a6c;
         font-family: 'Titillium Web', sans-serif;
    }
     a {
         text-decoration: none;
         color: #1ab188;
         transition: 0.5s ease;
    }
     a:hover {
         color: #179b77;
    }
     .form {
         background: rgba(6, 55, 92, 0.9);
         padding: 40px;
         max-width: 600px;
         margin: 40px auto;
         border-radius: 4px;
         box-shadow: 0 4px 10px 4px rgba(19, 35, 47, .3);
    }
     .tab-group {
         list-style: none;
         padding: 0;
         margin: 0 0 40px 0;
    }
     .tab-group:after {
         content: "";
         display: table;
         clear: both;
    }
     .tab-group li a {
         display: block;
         text-decoration: none;
         padding: 15px;
         background: rgba(160, 179, 176, .25);
         color: #a0b3b0;
         font-size: 20px;
         float: left;
         width: 50%;
         text-align: center;
         cursor: pointer;
         transition: 0.5s ease;
    }
     .tab-group li a:hover {
         background: #179b77;
         color: #fff;
    }
     .tab-group .active a {
         background: #1ab188;
         color: #fff;
    }
     .tab-content > div:last-child {
         display: none;
    }
     h1 {
         text-align: center;
         color: #fff;
         font-weight: 300;
         margin: 0 0 40px;
    }
     label {
         position: absolute;
         transform: translateY(6px);
         left: 13px;
         color: rgba(255, 255, 255, .5);
         transition: all 0.25s ease;
         -webkit-backface-visibility: hidden;
         pointer-events: none;
         font-size: 22px;
    }
     label .req {
         margin: 2px;
         color: #1ab188;
    }
     label.active {
         transform: translateY(50px);
         left: 2px;
         font-size: 14px;
    }
     label.active .req {
         opacity: 0;
    }
     label.highlight {
         color: #fff;
    }
     input, textarea {
         font-size: 22px;
         display: block;
         width: 100%;
         height: 100%;
         padding: 5px 10px;
         background: none;
         background-image: none;
         border: 1px solid #a0b3b0;
         color: #fff;
         border-radius: 0;
         transition: border-color 0.25s ease, box-shadow 0.25s ease;
    }
     input:focus, textarea:focus {
         outline: 0;
         border-color: #1ab188;
    }
     textarea {
         border: 2px solid #a0b3b0;
         resize: vertical;
    }
     .field-wrap {
         position: relative;
         margin-bottom: 40px;
    }
     .top-row:after {
         content: "";
         display: table;
         clear: both;
    }
     .top-row > div {
         float: left;
         width: 48%;
         margin-right: 4%;
    }
     .top-row > div:last-child {
         margin: 0;
    }
     .button {
         border: 0;
         outline: none;
         border-radius: 0;
         padding: 15px 0;
         font-size: 2rem;
         font-weight: 600;
         text-transform: uppercase;
         letter-spacing: 0.1em;
         background: #b90808;
         color: #fff;
         transition: all 0.5s ease;
         -webkit-appearance: none;
    }
     .button:hover, .button:focus {
         background: #570404;
    }
     .button-block {
         display: block;
         width: 100%;
    }
     .forgot {
         margin-top: -20px;
         text-align: right;
    }
     
    </style>
<style>
table {
    margin-left:1cm;
    margin-top:2cm;
  border-collapse: collapse;
  width: 95%;
  background-color:white;
}

th, td {
  text-align: left;
  padding: 8px;
}

th {
  background-color: #f2f2f2;
  color: black;
}
</style>

<?php
    $bdd = new PDO('mysql:host=localhost;dbname=stage', 'abonne_steg', 'mannoubi12345@');

    $stmt = $bdd->query('SELECT * FROM cf_abonne');
    $donne=$stmt->fetchAll();
echo"<table border='5px'>";
echo("<tr><td>RC_UR_CODE</td><td>RC_PAY_CODE</td><td>RC_BQ_CODBQUE</td><td>CF_AB_SOLDE_FINAL</td><td>CF_AB_REF</td><td>CF_AB_NUM_COMPTE</td><td>CF_AB_NUMTEL_MOBILE</td><td>CF_AB_NOM_FR</td><td>CF_AB_MATRICULE_FISCAL</td><td>CF_AB_LOCALITE_FR</td><td>CF_AB_IDUTILISATEUR</td><td>CF_AB_EMAIL</td><td>CF_AB_DAT_CREATION</td><td>CF_AB_DATMAJ</td><td>CF_AB_CODE_POSTAL</td><td>CF_AB_CODE</td><td>CF_AB_CLE_COMPTE</td><td>CF_AB_CIN</td><td>CF_AB_ADRESS_FR</td></tr>");
foreach($donne as $v){
    echo("<tr><td>".$v['RC_UR_CODE']."</td><td>".$v['RC_PAY_CODE']."</td><td>".$v['RC_BQ_CODBQUE']."</td><td>".$v['CF_AB_SOLDE_FINAL']."</td><td>".$v['CF_AB_REF']."</td><td>".$v['CF_AB_NUM_COMPTE']."</td><td>".$v['CF_AB_NUMTEL_MOBILE']."</td><td>".$v['CF_AB_NOM_FR']."</td><td>".$v['CF_AB_MATRICULE_FISCAL']."</td><td>".$v['CF_AB_LOCALITE_FR']."</td><td>".$v['CF_AB_IDUTILISATEUR']."</td><td>".$v['CF_AB_EMAIL']."</td><td>".$v['CF_AB_DAT_CREATION']."</td><td>".$v['CF_AB_DATMAJ']."</td><td>".$v['CF_AB_CODE_POSTAL']."</td><td>".$v['CF_AB_CODE']."</td><td>".$v['CF_AB_CIN']."</td><td>".$v['CF_AB_ADRESS_FR']."</td></tr>");
}
echo "</table>";

 
?>
