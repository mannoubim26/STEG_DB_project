<!DOCTYPE html>
<html>
<title>Modification d'un employe</title>

<head>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css"
        integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <style>
    html,
    body {

        background-color: #075a6c;
        font-family: 'Titillium Web', sans-serif;
    }

    form {
        margin-top: 10%;
        border: 5px solid #f1f1f1;
        background-color: white;
        margin-left: 5cm
    }

    input[type=text],
    input[type=password] {
        width: 100%;
        padding: 16px 8px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        box-sizing: border-box;
    }

    .icon {
        font-size: 110px;
        display: flex;
        justify-content: center;
        color: #4286f4;
    }

    button {
        background-color: #4286f4;
        color: white;
        padding: 14px 0;
        margin: 10px 0;
        border: none;
        cursor: grab;
        width: 48%;
    }

    h1 {
        text-align: center;
        font-size: 18;
    }

    button:hover {
        opacity: 0.8;
    }

    .formcontainer {
        text-align: center;
        margin: 24px 50px 12px;
    }

    .container {
        padding: 16px 0;
        text-align: left;
    }

    span.psw {
        float: right;
        padding-top: 0;
        padding-right: 15px;
    }

    /* Change styles for span on extra small screens */
    @media screen and (max-width: 300px) {
        span.psw {
            display: block;
            float: none;
        }
    }

    .hide {
        display: none;
    }
    </style>
</head>

<body>

    <form style="width: 1000px; border-radius: 25px;" action="ModifyEmployee.php" method="post">

        <h1>Choisir un tableau</h1>

        <center>
            <input type="radio" name="radio" value="CF_ABONNE" id="radio1" onclick="showDiv('div1')">CF_ABONNE
            <input type="radio" name="radio" value="BT_RELEVEUR" id="radio2" onclick="showDiv('div2')">BT_RELEVEUR
            <input type="radio" name="radio" value="BT_CHARGE_SMS" id="radio3" onclick="showDiv('div3')">BT_CHARGE_SMS
        </center>
        <br><br><br>

        <div id="div1" style="display:none;">
            <h1>Modifier les informations personnelles d'un abonné</h1>
            <div class="formcontainer">
                <div class="container">
                    <label for="uname"><strong>Entrez le RC_UR_CODE</strong></label>
                    <input type="text" placeholder="Entrez le RC_UR_CODE" name="cin" required><br>
                    <center>
                        <input type="radio" name="radio" value="RC_PAY_CODE" onclick="myFunction1()">RC_PAY_CODE
                        <input type="radio" name="radio" value="RC_COMMUNE_CODE" onclick="myFunction2()">RC_COMMUNE_CODE
                        <input type="radio" name="radio" value="RC_ETAT_CODE" onclick="myFunction3()">RC_ETAT_CODE
                        <input type="radio" name="radio" value="EC_CATEG_CODE" onclick="myFunction4()">EC_CATEG_CODE
                        <br><br>
                        <input type="radio" name="radio" value="RC_BQ_CODBQUE" onclick="myFunction5()">RC_BQ_CODBQUE
                        <input type="radio" name="radio" value="RC_ABCLASS_CODE" onclick="myFunction6()">RC_ABCLASS_CODE
                        <input type="radio" name="radio" value="CF_AB_UF_CODE" onclick="myFunction7()">CF_AB_UF_CODE
                        <input type="radio" name="radio" value="CF_AB_SOLDE_FINAL"
                            onclick="myFunction8()">CF_AB_SOLDE_FINAL<br><br>
                        <input type="radio" name="radio" value="CF_AB_SAISONNIER"
                            onclick="myFunction9()">CF_AB_SAISONNIER
                        <input type="radio" name="radio" value="CF_AB_RELANCE" onclick="myFunction10()">CF_AB_RELANCE
                        <input type="radio" name="radio" value="CF_AB_NUM_COMPTE"
                            onclick="myFunction11()">CF_AB_NUM_COMPTE<br><br>
                        <input type="radio" name="radio" value="CF_AB_NUMTEL_MOBILE"
                            onclick="myFunction12()">CF_AB_NUMTEL_MOBILE
                        <input type="radio" name="radio" value="CF_AB_NUMTEL_FIX"
                            onclick="myFunction13()">CF_AB_NUMTEL_FIX
                        <input type="radio" name="radio" value="CF_AB_NUMFAX" onclick="myFunction14()">CF_AB_NUMFAX
                        <input type="radio" name="radio" value="CF_AB_NUMDETTE	"
                            onclick="myFunction15()">CF_AB_NUMDETTE<br><br>
                        <input type="radio" name="radio" value="AB_NOM_FR" onclick="myFunction16()">AB_NOM_FR
                        <input type="radio" name="radio" value="CF_AB_NOM_AR" onclick="myFunction17()">CF_AB_NOM_AR
                        <input type="radio" name="radio" value="CF_AB_NOMP_FR" onclick="myFunction19()">CF_AB_NOMP_FR
                        <input type="radio" name="radio" value="CF_AB_NOMP_AR"
                            onclick="myFunction20()">CF_AB_NOMP_AR<br><br>
                        <input type="radio" name="radio" value="CF_AB_NBCPTR_ACTIF"
                            onclick="myFunction21()">CF_AB_NBCPTR_ACTIF
                        <input type="radio" name="radio" value="CF_AB_MENSUALISE"
                            onclick="myFunction22()">CF_AB_MENSUALISE
                        <input type="radio" name="radio" value="CF_AB_MAXDAT_RLC"
                            onclick="myFunction23()">CF_AB_MAXDAT_RLC
                        <input type="radio" name="radio" value="CF_AB_MATRICULE_FISCAL"
                            onclick="myFunction24()">CF_AB_MATRICULE_FISCAL<br><br>
                        <input type="radio" name="radio" value="CF_AB_LOCALITE_FR"
                            onclick="myFunction25()">CF_AB_LOCALITE_FR
                        <input type="radio" name="radio" value="CF_AB_LOCALITE_AR"
                            onclick="myFunction26()">CF_AB_LOCALITE_AR
                        <input type="radio" name="radio" value="CF_AB_LOCALITEP_FR	"
                            onclick="myFunction27()">CF_AB_LOCALITEP_FR
                        <input type="radio" name="radio" value="CF_AB_LOCALITEP_AR"
                            onclick="myFunction28()">CF_AB_LOCALITEP_AR <br><br>
                        <input type="radio" name="radio" value="CF_AB_IDUTILISATEUR	"
                            onclick="myFunction29()">CF_AB_IDUTILISATEUR
                        <input type="radio" name="radio" value="CF_AB_EXONERE" onclick="myFunction30()">CF_AB_EXONERE
                        <input type="radio" name="radio" value="CF_AB_EMAIL" onclick="myFunction31()">CF_AB_EMAIL
                        <input type="radio" name="radio" value="CF_AB_DAT_RESILIATION"
                            onclick="myFunction32()">CF_AB_DAT_RESILIATION <br><br>
                        <input type="radio" name="radio" value="CF_AB_DAT_CREATION"
                            onclick="myFunction33()">CF_AB_DAT_CREATION
                        <input type="radio" name="radio" value="CF_AB_DATMAJ" onclick="myFunction34()">CF_AB_DATMAJ
                        <input type="radio" name="radio" value="CF_AB_CPVERSION"
                            onclick="myFunction35()">CF_AB_CPVERSION
                        <input type="radio" name="radio" value="CF_AB_CODE_POSTALP"
                            onclick="myFunction36()">CF_AB_CODE_POSTALP <br><br>
                        <input type="radio" name="radio" value="CF_AB_CODE_POSTAL"
                            onclick="myFunction37()">CF_AB_CODE_POSTAL
                        <input type="radio" name="radio" value="CF_AB_CODE" onclick="myFunction38()">CF_AB_CODE
                        <input type="radio" name="radio" value="CF_AB_CLE_COMPTE"
                            onclick="myFunction39()">CF_AB_CLE_COMPTE
                        <input type="radio" name="radio" value="CF_AB_CIN" onclick="myFunction40()">CF_AB_CIN <br><br>
                        <input type="radio" name="radio" value="CF_AB_ADRESS_FR"
                            onclick="myFunction41()">CF_AB_ADRESS_FR
                        <input type="radio" name="radio" value="CF_AB_ADRESS_AR"
                            onclick="myFunction42()">CF_AB_ADRESS_AR
                        <input type="radio" name="radio" value="CF_AB_ADRESSP_FR"
                            onclick="myFunction43()">CF_AB_ADRESSP_FR
                        <input type="radio" name="radio" value="CF_AB_ADRESSP_AR"
                            onclick="myFunction44()">CF_AB_ADRESSP_AR
                    </center>

                    <br>
                    <div id="RC_PAY_CODE" class="hide">
                        <label for="RC_PAY_CODE"><strong>Entrez la valeur:</strong></label>
                        <input type="text" placeholder="Entrez la valeur" name="RC_PAY_CODE">
                    </div>
                    <div id="RC_ETAT_CODE" class="hide">
                        <label for="RC_ETAT_CODE"><strong>Entrez la valeur:</strong></label>
                        <div id="RC_COMMUNE_CODE" class="hide">
                            <label for="RC_COMMUNE_CODE"><strong>Entrez la valeur:</strong></label>
                            <input type="text" placeholder="RC_COMMUNE_CODE" name="RC_COMMUNE_CODE">
                        </div>
                        <div id="EC_CATEG_CODE" class="hide">
                            <label for="EC_CATEG_CODE"><strong>Entrez la valeur:</strong></label>
                            <input type="text" placeholder="EC_CATEG_CODE" name="EC_CATEG_CODE ">
                        </div>
                        <div id="RC_BQ_CODBQUE" class="hide">
                            <label for="RC_BQ_CODBQUE"><strong>Entrez la valeur:</strong></label>
                            <input type="text" placeholder="RC_BQ_CODBQUE" name="RC_BQ_CODBQUE">
                        </div>
                        <div id="Numtel" class="hide">
                            <label for="Numtel"><strong>Entrez la valeur:</strong></label>
                            <input type="text" placeholder="RC_ABCLASS_CODE" name="RC_ABCLASS_CODE">
                        </div>
                        <div id="Numtel" class="hide">
                            <label for="Numtel"><strong>Entrez la valeur:</strong></label>
                            <input type="text" placeholder="CF_AB_UF_CODE" name="CF_AB_UF_CODE">
                        </div>
                        <div id="Numtel" class="hide">
                            <label for="Numtel"><strong>Entrez la valeur:</strong></label>
                            <input type="text" placeholder="CF_AB_SOLDE_FINAL" name="CF_AB_SOLDE_FINAL">
                        </div>
                        <div id="Numtel" class="hide">
                            <label for="Numtel"><strong>Entrez la valeur:</strong></label>
                            <input type="text" placeholder="CF_AB_SAISONNIER" name="CF_AB_SAISONNIER">
                        </div>
                        <div id="Numtel" class="hide">
                            <label for="Numtel"><strong>Entrez la valeur:</strong></label>
                            <input type="text" placeholder="CF_AB_NUM_COMPTE" name="CF_AB_NUM_COMPTE">
                        </div>
                        <div id="Numtel" class="hide">
                            <label for="Numtel"><strong>Entrez la valeur:</strong></label>
                            <input type="text" placeholder="CF_AB_NUMTEL_MOBILE" name="CF_AB_NUMTEL_MOBILE">
                        </div>
                        <div id="Numtel" class="hide">
                            <label for="Numtel"><strong>Entrez la valeur:</strong></label>
                            <input type="text" placeholder="CF_AB_NUMTEL_FIX" name="CF_AB_NUMTEL_FIX">
                        </div>
                        <div id="Numtel" class="hide">
                            <label for="Numtel"><strong>Entrez la valeur:</strong></label>
                            <input type="text" placeholder="CF_AB_NUMFAX" name="CF_AB_NUMFAX">
                        </div>
                        <div id="Numtel" class="hide">
                            <label for="Numtel"><strong>Entrez la valeur:</strong></label>
                            <input type="text" placeholder="CF_AB_NUMDETTE" name="CF_AB_NUMDETTE">
                        </div>
                        <div id="Numtel" class="hide">
                            <label for="Numtel"><strong>Entrez la valeur:</strong></label>
                            <input type="text" placeholder="CF_AB_NOM_FR" name="CF_AB_NOM_FR">
                        </div>
                        <div id="Numtel" class="hide">
                            <label for="Numtel"><strong>Entrez la valeur:</strong></label>
                            <input type="text" placeholder="CF_AB_NOM_AR" name="CF_AB_NOM_AR">
                        </div>
                        <div id="Numtel" class="hide">
                            <label for="Numtel"><strong>Entrez la valeur:</strong></label>
                            <input type="text" placeholder="CF_AB_NOMP_FR" name="CF_AB_NOMP_FR">
                        </div>
                        <div id="Numtel" class="hide">
                            <label for="Numtel"><strong>Entrez la valeur:</strong></label>
                            <input type="text" placeholder="CF_AB_NOMP_AR" name="CF_AB_NOMP_AR">
                        </div>
                        <div id="Numtel" class="hide">
                            <label for="Numtel"><strong>Entrez la valeur:</strong></label>
                            <input type="text" placeholder="CF_AB_NBCPTR_ACTIF" name="CF_AB_NBCPTR_ACTIF">
                        </div>
                        <div id="Numtel" class="hide">
                            <label for="Numtel"><strong>Entrez la valeur:</strong></label>
                            <input type="text" placeholder="CF_AB_MENSUALISE" name="CF_AB_MENSUALISE">
                        </div>
                        <div id="Numtel" class="hide">
                            <label for="Numtel"><strong>Entrez la valeur:</strong></label>
                            <input type="text" placeholder="CF_AB_MAXDAT_RLC" name="CF_AB_MAXDAT_RLC">
                        </div>
                        <div id="CF_AB_MATRICULE_FISCAL" class="hide">
                            <label for="CF_AB_MATRICULE_FISCAL"><strong>Entrez la valeur:</strong></label>
                            <input type="text" placeholder="CF_AB_MATRICULE_FISCAL" name="CF_AB_MATRICULE_FISCAL">
                        </div>
                        <div id="CF_AB_LOCALITE_FR" class="hide">
                            <label for="CF_AB_LOCALITE_FR"><strong>Entrez la valeur:</strong></label>
                            <input type="text" placeholder="CF_AB_LOCALITE_FR" name="CF_AB_LOCALITE_FR">
                        </div>
                        <div id="CF_AB_LOCALITE_AR" class="hide">
                            <label for="CF_AB_LOCALITE_AR"><strong>Entrez la valeur:</strong></label>
                            <input type="text" placeholder="CF_AB_LOCALITE_AR" name="CF_AB_LOCALITE_AR">
                        </div>
                        <div id="CF_AB_LOCALITEP_FR" class="hide">
                            <label for="CF_AB_LOCALITEP_FR"><strong>Entrez la valeur:</strong></label>
                            <input type="text" placeholder="CF_AB_LOCALITEP_FR" name="CF_AB_LOCALITEP_FR">
                        </div>
                        <div id="CF_AB_LOCALITEP_AR" class="hide">
                            <label for="CF_AB_LOCALITEP_AR"><strong>Entrez la valeur:</strong></label>
                            <input type="text" placeholder="CF_AB_LOCALITEP_AR" name="CF_AB_LOCALITEP_AR">
                        </div>
                        <div id="CF_AB_IDUTILISATEUR" class="hide">
                            <label for="CF_AB_IDUTILISATEUR"><strong>Entrez la valeur:</strong></label>
                            <input type="text" placeholder="CF_AB_IDUTILISATEUR" name="CF_AB_IDUTILISATEUR">
                        </div>
                        <div id="CF_AB_EXONERE" class="hide">
                            <label for="CF_AB_EXONERE"><strong>Entrez la valeur:</strong></label>
                            <input type="text" placeholder="CF_AB_EXONERE" name="CF_AB_EXONERE">
                        </div>
                        <div id="CF_AB_EMAIL" class="hide">
                            <label for="CF_AB_EMAIL"><strong>Entrez la valeur:</strong></label>
                            <input type="text" placeholder="CF_AB_EMAIL" name="CF_AB_EMAIL">
                        </div>
                        <div id="CF_AB_DAT_RESILIATION" class="hide">
                            <label for="CF_AB_DAT_RESILIATION"><strong>Entrez la valeur:</strong></label>
                            <input type="text" placeholder="CF_AB_DAT_RESILIATION" name="CF_AB_DAT_RESILIATION">
                        </div>
                        <div id="CF_AB_DAT_CREATION" class="hide">
                            <label for="CF_AB_DAT_CREATION"><strong>Entrez la valeur:</strong></label>
                            <input type="text" placeholder="CF_AB_DAT_CREATION" name="CF_AB_DAT_CREATION">
                        </div>
                        <div id="CF_AB_DATMAJ" class="hide">
                            <label for="CF_AB_DATMAJ"><strong>Entrez la valeur:</strong></label>
                            <input type="text" placeholder="CF_AB_DATMAJ" name="CF_AB_DATMAJ">
                        </div>
                        <div id="CF_AB_CPVERSION" class="hide">
                            <label for="CF_AB_CPVERSION"><strong>Entrez la valeur:</strong></label>
                            <input type="text" placeholder="CF_AB_CPVERSION" name="CF_AB_CPVERSION">
                        </div>
                        <div id="CF_AB_CODE_POSTALP" class="hide">
                            <label for="CF_AB_CODE_POSTALP"><strong>Entrez la valeur:</strong></label>
                            <input type="text" placeholder="CF_AB_CODE_POSTALP" name="CF_AB_CODE_POSTALP">
                        </div>
                        <div id="CF_AB_CODE_POSTAL" class="hide">
                            <label for="CF_AB_CODE_POSTAL"><strong>Entrez la valeur:</strong></label>
                            <input type="text" placeholder="CF_AB_CODE_POSTAL" name="CF_AB_CODE_POSTAL">
                        </div>
                        <div id="CF_AB_CODE" class="hide">
                            <label for="CF_AB_CODE"><strong>Entrez la valeur:</strong></label>
                            <input type="text" placeholder="CF_AB_CODE" name="CF_AB_CODE">
                        </div>
                        <div id="CF_AB_CLE_COMPTE" class="hide">
                            <label for="CF_AB_CLE_COMPTE"><strong>Entrez la valeur:</strong></label>
                            <input type="text" placeholder="CF_AB_CLE_COMPTE" name="CF_AB_CLE_COMPTE">
                        </div>
                        <div id="CF_AB_CIN" class="hide">
                            <label for="CF_AB_CIN"><strong>Entrez la valeur:</strong></label>
                            <input type="text" placeholder="CF_AB_CIN" name="CF_AB_CIN">
                        </div>
                        <div id="CF_AB_ADRESS_FR" class="hide">
                            <label for="CF_AB_ADRESS_FR"><strong>Entrez la valeur:</strong></label>
                            <input type="text" placeholder="CF_AB_ADRESS_FR" name="CF_AB_ADRESS_FR">
                        </div>
                        <div id="CF_AB_ADRESS_AR" class="hide">
                            <label for="CF_AB_ADRESS_AR"><strong>Entrez la valeur:</strong></label>
                            <input type="text" placeholder="CF_AB_ADRESS_AR" name="CF_AB_ADRESS_AR">
                        </div>
                        <div id="CF_AB_ADRESSP_FR" class="hide">
                            <label for="CF_AB_ADRESSP_FR"><strong>Entrez la valeur:</strong></label>
                            <input type="text" placeholder="CF_AB_ADRESSP_FR" name="CF_AB_ADRESSP_FR">
                        </div>
                        <div id="CF_AB_ADRESSP_AR" class="hide">
                            <label for="CF_AB_ADRESSP_AR"><strong>Entrez la valeur:</strong></label>
                            <input type="text" placeholder="CF_AB_ADRESSP_AR" name="CF_AB_ADRESSP_AR">
                        </div>

                    </div>
                </div>
                <div id="BT_RELV_MATCLE" class="hide">
                    <label for="BT_RELV_MATCLE"><strong>Entrez la valeur:</strong></label>
                    <input type="text" placeholder="BT_RELV_MATCLE" name="BT_RELV_MATCLE">
                </div>
            </div>
            <div id="BT_RELV_IDUTILISATEUR" class="hide">
                <label for="BT_RELV_IDUTILISATEUR"><strong>Entrez la valeur:</strong></label>
                <input type="text" placeholder="BT_RELV_IDUTILISATEUR" name="BT_RELV_IDUTILISATEUR">
            </div>
            <button type="submit"> <strong>Modifier</strong></button>
                        <button style="background-color: red;" type="reset"
                            onclick="window.location.href='formulaires.html';"><strong>Annuler</strong></button>
        </div>

        <div id="div2" style="display:none;">
            <div class="formcontainer">
                <div class="container">
                <label for="uname"><strong>Entrez le RC_UR_CODE</strong></label>
                    <input type="text" placeholder="Entrez le RC_UR_CODE" name="cin" required><br>
                    <center>
                        <input type="radio" name="radio" value="BT_RELV_UF_CODE"
                            onclick="myFunction45()">BT_RELV_UF_CODE
                        <input type="radio" name="radio" value="BT_RELV_NOM_PRENOM_FR"
                            onclick="myFunction46()">BT_RELV_NOM_PRENOM_FR
                        <input type="radio" name="radio" value="BT_RELV_NOM_PRENOM_AR"
                            onclick="myFunction47()">BT_RELV_NOM_PRENOM_AR
                        <input type="radio" name="radio" value="BT_RELV_MATRICULE"
                            onclick="myFunction48()">BT_RELV_MATRICULE
                        <input type="radio" name="radio" value="BT_RELV_MATCLE" onclick="myFunction49()">BT_RELV_MATCLE
                        <input type="radio" name="radio" value="BT_RELV_IDUTILISATEUR"
                            onclick="myFunction50()">BT_RELV_IDUTILISATEUR
                    </center>
                    <div id="BT_RELV_UF_CODE" class="hide">
                        <label for="BT_RELV_UF_CODE"><strong>Entrez la valeur:</strong></label>
                        <input type="text" placeholder="BT_RELV_UF_CODE" name="BT_RELV_UF_CODE">
                    </div>

                    <div id="BT_RELV_NOM_PRENOM_FR" class="hide">
                        <label for="BT_RELV_NOM_PRENOM_FR"><strong>Entrez la valeur:</strong></label>
                        <input type="text" placeholder="BT_RELV_NOM_PRENOM_FR" name="BT_RELV_NOM_PRENOM_FR">
                    </div>
                </div>

                <div id="BT_RELV_NOM_PRENOM_AR" class="hide">
                    <label for="BT_RELV_NOM_PRENOM_AR"><strong>Entrez la valeur:</strong></label>
                    <input type="text" placeholder="BT_RELV_NOM_PRENOM_AR" name="BT_RELV_NOM_PRENOM_AR">
                </div>
            </div>

            <div id="BT_RELV_MATRICULE" class="hide">
                <label for="BT_RELV_MATRICULE"><strong>Entrez la valeur:</strong></label>
                <input type="text" placeholder="BT_RELV_MATRICULE" name="BT_RELV_MATRICULE">
            </div>
            <button type="submit"> <strong>Modifier</strong></button>
                        <button style="background-color: red;" type="reset"
                            onclick="window.location.href='formulaires.html';"><strong>Annuler</strong></button>
        </div>

        <div id="div3" style="display:none;">
            <div class="formcontainer">
                <div class="container">
                <label for="uname"><strong>Entrez le RC_UR_CODE</strong></label>
                    <input type="text" placeholder="Entrez le RC_UR_CODE" name="cin" required><br>
                    <center>
                        <input type="radio" name="radio" value="CF_INS_CIN" onclick="myFunction51()">CF_INS_CIN
                        <input type="radio" name="radio" value="CF_INS_CODE_POSTAL"
                            onclick="myFunction52()">CF_INS_CODE_POSTAL
                        <input type="radio" name="radio" value="CF_INS_EMAIL" onclick="myFunction53()">CF_INS_EMAIL
                        <input type="radio" name="radio" value="CF_INS_GSM" onclick="myFunction54()">CF_INS_GSM
                        <input type="radio" name="radio" value="CF_INS_LOCALITE"
                            onclick="myFunction55()">CF_INS_LOCALITE
                        <input type="radio" name="radio" value="CF_INS_NOM" onclick="myFunction56()">CF_INS_NOM
                        <input type="radio" name="radio" value="CF_INS_PRENOM" onclick="myFunction57()">CF_INS_PRENOM
                    </center>
                    <div id="BT_RELV_UF_CODE" class="hide">
                        <label for="BT_RELV_UF_CODE"><strong>Entrez la valeur:</strong></label>
                        <input type="text" placeholder="Entrez la valeur" name="BT_RELV_UF_CODE">
                    </div>
                    <div id="BT_RELV_NOM_PRENOM_FR" class="hide">
                        <label for="BT_RELV_NOM_PRENOM_FR"><strong>Entrez la valeur:</strong></label>
                        <input type="text" placeholder="Entrez la valeur" name="BT_RELV_NOM_PRENOM_FR">
                    </div>

                    <div id="BT_RELV_NOM_PRENOM_AR" class="hide">
                        <label for="BT_RELV_NOM_PRENOM_AR"><strong>Entrez la valeur:</strong></label>
                        <input type="text" placeholder="Entrez la valeur" name="BT_RELV_NOM_PRENOM_AR">
                    </div>

                    <div id="BT_RELV_MATRICULE" class="hide">
                        <label for="BT_RELV_MATRICULE"><strong>Entrez la valeur:</strong></label>
                        <input type="text" placeholder="Entrez la valeur" name="BT_RELV_MATRICULE">
                    </div>

                    <div id="BT_RELV_MATCLE" class="hide">
                        <label for="BT_RELV_MATCLE"><strong>Entrez la valeur:</strong></label>
                        <input type="text" placeholder="Entrez la valeur" name="BT_RELV_MATCLE">
                    </div>

                    <div id="BT_RELV_IDUTILISATEUR" class="hide">
                        <label for="BT_RELV_IDUTILISATEUR"><strong>Entrez la valeur:</strong></label>
                        <input type="text" placeholder="Entrez la valeur" name="BT_RELV_IDUTILISATEUR">
                       
                    </div>
                </div>
            </div>
            <button type="submit"> <strong>Modifier</strong></button>
                        <button style="background-color: red;" type="reset"
                            onclick="window.location.href='formulaires.html';"><strong>Annuler</strong></button>
        </div>

    </form>
</body>

<script>
function showDiv(divId) {
    let div1 = document.getElementById("div1");
    let div2 = document.getElementById("div2");
    let div3 = document.getElementById("div3");

    div1.style.display = "none";
    div2.style.display = "none";
    div3.style.display = "none";
    document.getElementById(divId).style.display = "block";
}

function myFunction1() {
    document.getElementById('RC_PAY_CODE').style.display = 'block';
    document.getElementById('RC_ETAT_CODE').style.display = 'none';
    document.getElementById('RC_COMMUNE_CODE').style.display = 'none';
    document.getElementById('EC_CATEG_CODE').style.display = 'none';
    document.getElementById('RC_BQ_CODBQUE').style.display = 'none';
    document.getElementById('RC_ABCLASS_CODE').style.display = 'none';
    document.getElementById('CF_AB_UF_CODE').style.display = 'none';
    document.getElementById('CF_AB_SOLDE_FINAL').style.display = 'none';
    document.getElementById('CF_AB_SAISONNIER').style.display = 'none';
    document.getElementById('CF_AB_RELANCE').style.display = 'none';
    document.getElementById('CF_AB_REF').style.display = 'none';
    document.getElementById('CF_AB_NUM_COMPTE').style.display = 'none';
    document.getElementById('CF_AB_NUMTEL_MOBILE').style.display = 'none';
    document.getElementById('CF_AB_NUMTEL_FIX').style.display = 'none';
    document.getElementById('CF_AB_NUMFAX').style.display = 'none';
    document.getElementById('CF_').style.display = 'none';
    document.getElementById('AB_NOM_FR').style.display = 'none';
    document.getElementById('CF_AB_NOM_AR').style.display = 'none';
    document.getElementById('CF_AB_NOMP_FR').style.display = 'none';
    document.getElementById('CF_AB_NOMP_AR').style.display = 'none';
    document.getElementById('CF_AB_NBCPTR_ACTIF').style.display = 'none';
    document.getElementById('CF_AB_MENSUALISE').style.display = 'none';
    document.getElementById('CF_AB_MAXDAT_RLC').style.display = 'none';
    document.getElementById('CF_AB_MATRICULE_FISCAL').style.display = 'none';
    document.getElementById('CF_AB_LOCALITE_FR').style.display = 'none';
    document.getElementById('CF_AB_LOCALITE_AR').style.display = 'none';
    document.getElementById('CF_AB_LOCALITEP_FR').style.display = 'none';
    document.getElementById('CF_AB_LOCALITEP_AR').style.display = 'none';
    document.getElementById('CF_AB_IDUTILISATEUR').style.display = 'none';
    document.getElementById('CF_AB_EXONERE').style.display = 'none';
    document.getElementById('CF_AB_EMAIL').style.display = 'none';
    document.getElementById('CF_AB_DAT_RESILIATION').style.display = 'none';
    document.getElementById('CF_AB_DAT_CREATION').style.display = 'none';
    document.getElementById('CF_AB_DATMAJ').style.display = 'none';
    document.getElementById('CF_AB_CPVERSION').style.display = 'none';
    document.getElementById('CF_AB_CODE_POSTALP').style.display = 'none';
    document.getElementById('CF_AB_CODE_POSTAL').style.display = 'none';
    document.getElementById('CF_AB_CODE').style.display = 'none';
    document.getElementById('CF_AB_CLE_COMPTE').style.display = 'none';
    document.getElementById('CF_AB_CIN').style.display = 'none';
    document.getElementById('CF_AB_ADRESS_FR').style.display = 'none';
    document.getElementById('CF_AB_ADRESS_AR').style.display = 'none';
    document.getElementById('CF_AB_ADRESSP_FR').style.display = 'none';
    document.getElementById('CF_AB_ADRESSP_AR').style.display = 'none';



}

function myFunction2() {
    document.getElementById('RC_PAY_CODE').style.display = 'none';
    document.getElementById('RC_ETAT_CODE').style.display = 'block';
    document.getElementById('RC_COMMUNE_CODE').style.display = 'none';
    document.getElementById('EC_CATEG_CODE').style.display = 'none';
    document.getElementById('RC_BQ_CODBQUE').style.display = 'none';
    document.getElementById('RC_ABCLASS_CODE').style.display = 'none';
    document.getElementById('CF_AB_UF_CODE').style.display = 'none';
    document.getElementById('CF_AB_SOLDE_FINAL').style.display = 'none';
    document.getElementById('CF_AB_SAISONNIER').style.display = 'none';
    document.getElementById('CF_AB_RELANCE').style.display = 'none';
    document.getElementById('CF_AB_REF').style.display = 'none';
    document.getElementById('CF_AB_NUM_COMPTE').style.display = 'none';
    document.getElementById('CF_AB_NUMTEL_MOBILE').style.display = 'none';
    document.getElementById('CF_AB_NUMTEL_FIX').style.display = 'none';
    document.getElementById('CF_AB_NUMFAX').style.display = 'none';
    document.getElementById('CF_').style.display = 'none';
    document.getElementById('AB_NOM_FR').style.display = 'none';
    document.getElementById('CF_AB_NOM_AR').style.display = 'none';
    document.getElementById('CF_AB_NOMP_FR').style.display = 'none';
    document.getElementById('CF_AB_NOMP_AR').style.display = 'none';
    document.getElementById('CF_AB_NBCPTR_ACTIF').style.display = 'none';
    document.getElementById('CF_AB_MENSUALISE').style.display = 'none';
    document.getElementById('CF_AB_MAXDAT_RLC').style.display = 'none';
    document.getElementById('CF_AB_MATRICULE_FISCAL').style.display = 'none';
    document.getElementById('CF_AB_LOCALITE_FR').style.display = 'none';
    document.getElementById('CF_AB_LOCALITE_AR').style.display = 'none';
    document.getElementById('CF_AB_LOCALITEP_FR').style.display = 'none';
    document.getElementById('CF_AB_LOCALITEP_AR').style.display = 'none';
    document.getElementById('CF_AB_IDUTILISATEUR').style.display = 'none';
    document.getElementById('CF_AB_EXONERE').style.display = 'none';
    document.getElementById('CF_AB_EMAIL').style.display = 'none';
    document.getElementById('CF_AB_DAT_RESILIATION').style.display = 'none';
    document.getElementById('CF_AB_DAT_CREATION').style.display = 'none';
    document.getElementById('CF_AB_DATMAJ').style.display = 'none';
    document.getElementById('CF_AB_CPVERSION').style.display = 'none';
    document.getElementById('CF_AB_CODE_POSTALP').style.display = 'none';
    document.getElementById('CF_AB_CODE_POSTAL').style.display = 'none';
    document.getElementById('CF_AB_CODE').style.display = 'none';
    document.getElementById('CF_AB_CLE_COMPTE').style.display = 'none';
    document.getElementById('CF_AB_CIN').style.display = 'none';
    document.getElementById('CF_AB_ADRESS_FR').style.display = 'none';
    document.getElementById('CF_AB_ADRESS_AR').style.display = 'none';
    document.getElementById('CF_AB_ADRESSP_FR').style.display = 'none';
    document.getElementById('CF_AB_ADRESSP_AR').style.display = 'none';



}

function myFunction3() {
    document.getElementById('RC_PAY_CODE').style.display = 'block';
    document.getElementById('RC_ETAT_CODE').style.display = 'none';
    document.getElementById('RC_COMMUNE_CODE').style.display = 'none';
    document.getElementById('EC_CATEG_CODE').style.display = 'none';
    document.getElementById('RC_BQ_CODBQUE').style.display = 'none';
    document.getElementById('RC_ABCLASS_CODE').style.display = 'none';
    document.getElementById('CF_AB_UF_CODE').style.display = 'none';
    document.getElementById('CF_AB_SOLDE_FINAL').style.display = 'none';
    document.getElementById('CF_AB_SAISONNIER').style.display = 'none';
    document.getElementById('CF_AB_RELANCE').style.display = 'none';
    document.getElementById('CF_AB_REF').style.display = 'none';
    document.getElementById('CF_AB_NUM_COMPTE').style.display = 'none';
    document.getElementById('CF_AB_NUMTEL_MOBILE').style.display = 'none';
    document.getElementById('CF_AB_NUMTEL_FIX').style.display = 'none';
    document.getElementById('CF_AB_NUMFAX').style.display = 'none';
    document.getElementById('CF_').style.display = 'none';
    document.getElementById('AB_NOM_FR').style.display = 'none';
    document.getElementById('CF_AB_NOM_AR').style.display = 'none';
    document.getElementById('CF_AB_NOMP_FR').style.display = 'none';
    document.getElementById('CF_AB_NOMP_AR').style.display = 'none';
    document.getElementById('CF_AB_NBCPTR_ACTIF').style.display = 'none';
    document.getElementById('CF_AB_MENSUALISE').style.display = 'none';
    document.getElementById('CF_AB_MAXDAT_RLC').style.display = 'none';
    document.getElementById('CF_AB_MATRICULE_FISCAL').style.display = 'none';
    document.getElementById('CF_AB_LOCALITE_FR').style.display = 'none';
    document.getElementById('CF_AB_LOCALITE_AR').style.display = 'none';
    document.getElementById('CF_AB_LOCALITEP_FR').style.display = 'none';
    document.getElementById('CF_AB_LOCALITEP_AR').style.display = 'none';
    document.getElementById('CF_AB_IDUTILISATEUR').style.display = 'none';
    document.getElementById('CF_AB_EXONERE').style.display = 'none';
    document.getElementById('CF_AB_EMAIL').style.display = 'none';
    document.getElementById('CF_AB_DAT_RESILIATION').style.display = 'none';
    document.getElementById('CF_AB_DAT_CREATION').style.display = 'none';
    document.getElementById('CF_AB_DATMAJ').style.display = 'none';
    document.getElementById('CF_AB_CPVERSION').style.display = 'none';
    document.getElementById('CF_AB_CODE_POSTALP').style.display = 'none';
    document.getElementById('CF_AB_CODE_POSTAL').style.display = 'none';
    document.getElementById('CF_AB_CODE').style.display = 'none';
    document.getElementById('CF_AB_CLE_COMPTE').style.display = 'none';
    document.getElementById('CF_AB_CIN').style.display = 'none';
    document.getElementById('CF_AB_ADRESS_FR').style.display = 'none';
    document.getElementById('CF_AB_ADRESS_AR').style.display = 'none';
    document.getElementById('CF_AB_ADRESSP_FR').style.display = 'none';
    document.getElementById('CF_AB_ADRESSP_AR').style.display = 'none';



}

function myFunction4() {
    document.getElementById('RC_PAY_CODE').style.display = 'block';
    document.getElementById('RC_ETAT_CODE').style.display = 'none';
    document.getElementById('RC_COMMUNE_CODE').style.display = 'none';
    document.getElementById('EC_CATEG_CODE').style.display = 'none';
    document.getElementById('RC_BQ_CODBQUE').style.display = 'none';
    document.getElementById('RC_ABCLASS_CODE').style.display = 'none';
    document.getElementById('CF_AB_UF_CODE').style.display = 'none';
    document.getElementById('CF_AB_SOLDE_FINAL').style.display = 'none';
    document.getElementById('CF_AB_SAISONNIER').style.display = 'none';
    document.getElementById('CF_AB_RELANCE').style.display = 'none';
    document.getElementById('CF_AB_REF').style.display = 'none';
    document.getElementById('CF_AB_NUM_COMPTE').style.display = 'none';
    document.getElementById('CF_AB_NUMTEL_MOBILE').style.display = 'none';
    document.getElementById('CF_AB_NUMTEL_FIX').style.display = 'none';
    document.getElementById('CF_AB_NUMFAX').style.display = 'none';
    document.getElementById('CF_').style.display = 'none';
    document.getElementById('AB_NOM_FR').style.display = 'none';
    document.getElementById('CF_AB_NOM_AR').style.display = 'none';
    document.getElementById('CF_AB_NOMP_FR').style.display = 'none';
    document.getElementById('CF_AB_NOMP_AR').style.display = 'none';
    document.getElementById('CF_AB_NBCPTR_ACTIF').style.display = 'none';
    document.getElementById('CF_AB_MENSUALISE').style.display = 'none';
    document.getElementById('CF_AB_MAXDAT_RLC').style.display = 'none';
    document.getElementById('CF_AB_MATRICULE_FISCAL').style.display = 'none';
    document.getElementById('CF_AB_LOCALITE_FR').style.display = 'none';
    document.getElementById('CF_AB_LOCALITE_AR').style.display = 'none';
    document.getElementById('CF_AB_LOCALITEP_FR').style.display = 'none';
    document.getElementById('CF_AB_LOCALITEP_AR').style.display = 'none';
    document.getElementById('CF_AB_IDUTILISATEUR').style.display = 'none';
    document.getElementById('CF_AB_EXONERE').style.display = 'none';
    document.getElementById('CF_AB_EMAIL').style.display = 'none';
    document.getElementById('CF_AB_DAT_RESILIATION').style.display = 'none';
    document.getElementById('CF_AB_DAT_CREATION').style.display = 'none';
    document.getElementById('CF_AB_DATMAJ').style.display = 'none';
    document.getElementById('CF_AB_CPVERSION').style.display = 'none';
    document.getElementById('CF_AB_CODE_POSTALP').style.display = 'none';
    document.getElementById('CF_AB_CODE_POSTAL').style.display = 'none';
    document.getElementById('CF_AB_CODE').style.display = 'none';
    document.getElementById('CF_AB_CLE_COMPTE').style.display = 'none';
    document.getElementById('CF_AB_CIN').style.display = 'none';
    document.getElementById('CF_AB_ADRESS_FR').style.display = 'none';
    document.getElementById('CF_AB_ADRESS_AR').style.display = 'none';
    document.getElementById('CF_AB_ADRESSP_FR').style.display = 'none';
    document.getElementById('CF_AB_ADRESSP_AR').style.display = 'none';



}

function myFunction5() {
    document.getElementById('RC_PAY_CODE').style.display = 'block';
    document.getElementById('RC_ETAT_CODE').style.display = 'none';
    document.getElementById('RC_COMMUNE_CODE').style.display = 'none';
    document.getElementById('EC_CATEG_CODE').style.display = 'none';
    document.getElementById('RC_BQ_CODBQUE').style.display = 'none';
    document.getElementById('RC_ABCLASS_CODE').style.display = 'none';
    document.getElementById('CF_AB_UF_CODE').style.display = 'none';
    document.getElementById('CF_AB_SOLDE_FINAL').style.display = 'none';
    document.getElementById('CF_AB_SAISONNIER').style.display = 'none';
    document.getElementById('CF_AB_RELANCE').style.display = 'none';
    document.getElementById('CF_AB_REF').style.display = 'none';
    document.getElementById('CF_AB_NUM_COMPTE').style.display = 'none';
    document.getElementById('CF_AB_NUMTEL_MOBILE').style.display = 'none';
    document.getElementById('CF_AB_NUMTEL_FIX').style.display = 'none';
    document.getElementById('CF_AB_NUMFAX').style.display = 'none';
    document.getElementById('CF_').style.display = 'none';
    document.getElementById('AB_NOM_FR').style.display = 'none';
    document.getElementById('CF_AB_NOM_AR').style.display = 'none';
    document.getElementById('CF_AB_NOMP_FR').style.display = 'none';
    document.getElementById('CF_AB_NOMP_AR').style.display = 'none';
    document.getElementById('CF_AB_NBCPTR_ACTIF').style.display = 'none';
    document.getElementById('CF_AB_MENSUALISE').style.display = 'none';
    document.getElementById('CF_AB_MAXDAT_RLC').style.display = 'none';
    document.getElementById('CF_AB_MATRICULE_FISCAL').style.display = 'none';
    document.getElementById('CF_AB_LOCALITE_FR').style.display = 'none';
    document.getElementById('CF_AB_LOCALITE_AR').style.display = 'none';
    document.getElementById('CF_AB_LOCALITEP_FR').style.display = 'none';
    document.getElementById('CF_AB_LOCALITEP_AR').style.display = 'none';
    document.getElementById('CF_AB_IDUTILISATEUR').style.display = 'none';
    document.getElementById('CF_AB_EXONERE').style.display = 'none';
    document.getElementById('CF_AB_EMAIL').style.display = 'none';
    document.getElementById('CF_AB_DAT_RESILIATION').style.display = 'none';
    document.getElementById('CF_AB_DAT_CREATION').style.display = 'none';
    document.getElementById('CF_AB_DATMAJ').style.display = 'none';
    document.getElementById('CF_AB_CPVERSION').style.display = 'none';
    document.getElementById('CF_AB_CODE_POSTALP').style.display = 'none';
    document.getElementById('CF_AB_CODE_POSTAL').style.display = 'none';
    document.getElementById('CF_AB_CODE').style.display = 'none';
    document.getElementById('CF_AB_CLE_COMPTE').style.display = 'none';
    document.getElementById('CF_AB_CIN').style.display = 'none';
    document.getElementById('CF_AB_ADRESS_FR').style.display = 'none';
    document.getElementById('CF_AB_ADRESS_AR').style.display = 'none';
    document.getElementById('CF_AB_ADRESSP_FR').style.display = 'none';
    document.getElementById('CF_AB_ADRESSP_AR').style.display = 'none';



}

function myFunction6() {
    document.getElementById('RC_PAY_CODE').style.display = 'block';
    document.getElementById('RC_ETAT_CODE').style.display = 'none';
    document.getElementById('RC_COMMUNE_CODE').style.display = 'none';
    document.getElementById('EC_CATEG_CODE').style.display = 'none';
    document.getElementById('RC_BQ_CODBQUE').style.display = 'none';
    document.getElementById('RC_ABCLASS_CODE').style.display = 'none';
    document.getElementById('CF_AB_UF_CODE').style.display = 'none';
    document.getElementById('CF_AB_SOLDE_FINAL').style.display = 'none';
    document.getElementById('CF_AB_SAISONNIER').style.display = 'none';
    document.getElementById('CF_AB_RELANCE').style.display = 'none';
    document.getElementById('CF_AB_REF').style.display = 'none';
    document.getElementById('CF_AB_NUM_COMPTE').style.display = 'none';
    document.getElementById('CF_AB_NUMTEL_MOBILE').style.display = 'none';
    document.getElementById('CF_AB_NUMTEL_FIX').style.display = 'none';
    document.getElementById('CF_AB_NUMFAX').style.display = 'none';
    document.getElementById('CF_').style.display = 'none';
    document.getElementById('AB_NOM_FR').style.display = 'none';
    document.getElementById('CF_AB_NOM_AR').style.display = 'none';
    document.getElementById('CF_AB_NOMP_FR').style.display = 'none';
    document.getElementById('CF_AB_NOMP_AR').style.display = 'none';
    document.getElementById('CF_AB_NBCPTR_ACTIF').style.display = 'none';
    document.getElementById('CF_AB_MENSUALISE').style.display = 'none';
    document.getElementById('CF_AB_MAXDAT_RLC').style.display = 'none';
    document.getElementById('CF_AB_MATRICULE_FISCAL').style.display = 'none';
    document.getElementById('CF_AB_LOCALITE_FR').style.display = 'none';
    document.getElementById('CF_AB_LOCALITE_AR').style.display = 'none';
    document.getElementById('CF_AB_LOCALITEP_FR').style.display = 'none';
    document.getElementById('CF_AB_LOCALITEP_AR').style.display = 'none';
    document.getElementById('CF_AB_IDUTILISATEUR').style.display = 'none';
    document.getElementById('CF_AB_EXONERE').style.display = 'none';
    document.getElementById('CF_AB_EMAIL').style.display = 'none';
    document.getElementById('CF_AB_DAT_RESILIATION').style.display = 'none';
    document.getElementById('CF_AB_DAT_CREATION').style.display = 'none';
    document.getElementById('CF_AB_DATMAJ').style.display = 'none';
    document.getElementById('CF_AB_CPVERSION').style.display = 'none';
    document.getElementById('CF_AB_CODE_POSTALP').style.display = 'none';
    document.getElementById('CF_AB_CODE_POSTAL').style.display = 'none';
    document.getElementById('CF_AB_CODE').style.display = 'none';
    document.getElementById('CF_AB_CLE_COMPTE').style.display = 'none';
    document.getElementById('CF_AB_CIN').style.display = 'none';
    document.getElementById('CF_AB_ADRESS_FR').style.display = 'none';
    document.getElementById('CF_AB_ADRESS_AR').style.display = 'none';
    document.getElementById('CF_AB_ADRESSP_FR').style.display = 'none';
    document.getElementById('CF_AB_ADRESSP_AR').style.display = 'none';



}

function myFunction7() {
    document.getElementById('RC_PAY_CODE').style.display = 'block';
    document.getElementById('RC_ETAT_CODE').style.display = 'none';
    document.getElementById('RC_COMMUNE_CODE').style.display = 'none';
    document.getElementById('EC_CATEG_CODE').style.display = 'none';
    document.getElementById('RC_BQ_CODBQUE').style.display = 'none';
    document.getElementById('RC_ABCLASS_CODE').style.display = 'none';
    document.getElementById('CF_AB_UF_CODE').style.display = 'none';
    document.getElementById('CF_AB_SOLDE_FINAL').style.display = 'none';
    document.getElementById('CF_AB_SAISONNIER').style.display = 'none';
    document.getElementById('CF_AB_RELANCE').style.display = 'none';
    document.getElementById('CF_AB_REF').style.display = 'none';
    document.getElementById('CF_AB_NUM_COMPTE').style.display = 'none';
    document.getElementById('CF_AB_NUMTEL_MOBILE').style.display = 'none';
    document.getElementById('CF_AB_NUMTEL_FIX').style.display = 'none';
    document.getElementById('CF_AB_NUMFAX').style.display = 'none';
    document.getElementById('CF_').style.display = 'none';
    document.getElementById('AB_NOM_FR').style.display = 'none';
    document.getElementById('CF_AB_NOM_AR').style.display = 'none';
    document.getElementById('CF_AB_NOMP_FR').style.display = 'none';
    document.getElementById('CF_AB_NOMP_AR').style.display = 'none';
    document.getElementById('CF_AB_NBCPTR_ACTIF').style.display = 'none';
    document.getElementById('CF_AB_MENSUALISE').style.display = 'none';
    document.getElementById('CF_AB_MAXDAT_RLC').style.display = 'none';
    document.getElementById('CF_AB_MATRICULE_FISCAL').style.display = 'none';
    document.getElementById('CF_AB_LOCALITE_FR').style.display = 'none';
    document.getElementById('CF_AB_LOCALITE_AR').style.display = 'none';
    document.getElementById('CF_AB_LOCALITEP_FR').style.display = 'none';
    document.getElementById('CF_AB_LOCALITEP_AR').style.display = 'none';
    document.getElementById('CF_AB_IDUTILISATEUR').style.display = 'none';
    document.getElementById('CF_AB_EXONERE').style.display = 'none';
    document.getElementById('CF_AB_EMAIL').style.display = 'none';
    document.getElementById('CF_AB_DAT_RESILIATION').style.display = 'none';
    document.getElementById('CF_AB_DAT_CREATION').style.display = 'none';
    document.getElementById('CF_AB_DATMAJ').style.display = 'none';
    document.getElementById('CF_AB_CPVERSION').style.display = 'none';
    document.getElementById('CF_AB_CODE_POSTALP').style.display = 'none';
    document.getElementById('CF_AB_CODE_POSTAL').style.display = 'none';
    document.getElementById('CF_AB_CODE').style.display = 'none';
    document.getElementById('CF_AB_CLE_COMPTE').style.display = 'none';
    document.getElementById('CF_AB_CIN').style.display = 'none';
    document.getElementById('CF_AB_ADRESS_FR').style.display = 'none';
    document.getElementById('CF_AB_ADRESS_AR').style.display = 'none';
    document.getElementById('CF_AB_ADRESSP_FR').style.display = 'none';
    document.getElementById('CF_AB_ADRESSP_AR').style.display = 'none';



}

function myFunction8() {
    document.getElementById('RC_PAY_CODE').style.display = 'block';
    document.getElementById('RC_ETAT_CODE').style.display = 'none';
    document.getElementById('RC_COMMUNE_CODE').style.display = 'none';
    document.getElementById('EC_CATEG_CODE').style.display = 'none';
    document.getElementById('RC_BQ_CODBQUE').style.display = 'none';
    document.getElementById('RC_ABCLASS_CODE').style.display = 'none';
    document.getElementById('CF_AB_UF_CODE').style.display = 'none';
    document.getElementById('CF_AB_SOLDE_FINAL').style.display = 'none';
    document.getElementById('CF_AB_SAISONNIER').style.display = 'none';
    document.getElementById('CF_AB_RELANCE').style.display = 'none';
    document.getElementById('CF_AB_REF').style.display = 'none';
    document.getElementById('CF_AB_NUM_COMPTE').style.display = 'none';
    document.getElementById('CF_AB_NUMTEL_MOBILE').style.display = 'none';
    document.getElementById('CF_AB_NUMTEL_FIX').style.display = 'none';
    document.getElementById('CF_AB_NUMFAX').style.display = 'none';
    document.getElementById('CF_').style.display = 'none';
    document.getElementById('AB_NOM_FR').style.display = 'none';
    document.getElementById('CF_AB_NOM_AR').style.display = 'none';
    document.getElementById('CF_AB_NOMP_FR').style.display = 'none';
    document.getElementById('CF_AB_NOMP_AR').style.display = 'none';
    document.getElementById('CF_AB_NBCPTR_ACTIF').style.display = 'none';
    document.getElementById('CF_AB_MENSUALISE').style.display = 'none';
    document.getElementById('CF_AB_MAXDAT_RLC').style.display = 'none';
    document.getElementById('CF_AB_MATRICULE_FISCAL').style.display = 'none';
    document.getElementById('CF_AB_LOCALITE_FR').style.display = 'none';
    document.getElementById('CF_AB_LOCALITE_AR').style.display = 'none';
    document.getElementById('CF_AB_LOCALITEP_FR').style.display = 'none';
    document.getElementById('CF_AB_LOCALITEP_AR').style.display = 'none';
    document.getElementById('CF_AB_IDUTILISATEUR').style.display = 'none';
    document.getElementById('CF_AB_EXONERE').style.display = 'none';
    document.getElementById('CF_AB_EMAIL').style.display = 'none';
    document.getElementById('CF_AB_DAT_RESILIATION').style.display = 'none';
    document.getElementById('CF_AB_DAT_CREATION').style.display = 'none';
    document.getElementById('CF_AB_DATMAJ').style.display = 'none';
    document.getElementById('CF_AB_CPVERSION').style.display = 'none';
    document.getElementById('CF_AB_CODE_POSTALP').style.display = 'none';
    document.getElementById('CF_AB_CODE_POSTAL').style.display = 'none';
    document.getElementById('CF_AB_CODE').style.display = 'none';
    document.getElementById('CF_AB_CLE_COMPTE').style.display = 'none';
    document.getElementById('CF_AB_CIN').style.display = 'none';
    document.getElementById('CF_AB_ADRESS_FR').style.display = 'none';
    document.getElementById('CF_AB_ADRESS_AR').style.display = 'none';
    document.getElementById('CF_AB_ADRESSP_FR').style.display = 'none';
    document.getElementById('CF_AB_ADRESSP_AR').style.display = 'none';



}

function myFunction9() {
    document.getElementById('RC_PAY_CODE').style.display = 'block';
    document.getElementById('RC_ETAT_CODE').style.display = 'none';
    document.getElementById('RC_COMMUNE_CODE').style.display = 'none';
    document.getElementById('EC_CATEG_CODE').style.display = 'none';
    document.getElementById('RC_BQ_CODBQUE').style.display = 'none';
    document.getElementById('RC_ABCLASS_CODE').style.display = 'none';
    document.getElementById('CF_AB_UF_CODE').style.display = 'none';
    document.getElementById('CF_AB_SOLDE_FINAL').style.display = 'none';
    document.getElementById('CF_AB_SAISONNIER').style.display = 'none';
    document.getElementById('CF_AB_RELANCE').style.display = 'none';
    document.getElementById('CF_AB_REF').style.display = 'none';
    document.getElementById('CF_AB_NUM_COMPTE').style.display = 'none';
    document.getElementById('CF_AB_NUMTEL_MOBILE').style.display = 'none';
    document.getElementById('CF_AB_NUMTEL_FIX').style.display = 'none';
    document.getElementById('CF_AB_NUMFAX').style.display = 'none';
    document.getElementById('CF_').style.display = 'none';
    document.getElementById('AB_NOM_FR').style.display = 'none';
    document.getElementById('CF_AB_NOM_AR').style.display = 'none';
    document.getElementById('CF_AB_NOMP_FR').style.display = 'none';
    document.getElementById('CF_AB_NOMP_AR').style.display = 'none';
    document.getElementById('CF_AB_NBCPTR_ACTIF').style.display = 'none';
    document.getElementById('CF_AB_MENSUALISE').style.display = 'none';
    document.getElementById('CF_AB_MAXDAT_RLC').style.display = 'none';
    document.getElementById('CF_AB_MATRICULE_FISCAL').style.display = 'none';
    document.getElementById('CF_AB_LOCALITE_FR').style.display = 'none';
    document.getElementById('CF_AB_LOCALITE_AR').style.display = 'none';
    document.getElementById('CF_AB_LOCALITEP_FR').style.display = 'none';
    document.getElementById('CF_AB_LOCALITEP_AR').style.display = 'none';
    document.getElementById('CF_AB_IDUTILISATEUR').style.display = 'none';
    document.getElementById('CF_AB_EXONERE').style.display = 'none';
    document.getElementById('CF_AB_EMAIL').style.display = 'none';
    document.getElementById('CF_AB_DAT_RESILIATION').style.display = 'none';
    document.getElementById('CF_AB_DAT_CREATION').style.display = 'none';
    document.getElementById('CF_AB_DATMAJ').style.display = 'none';
    document.getElementById('CF_AB_CPVERSION').style.display = 'none';
    document.getElementById('CF_AB_CODE_POSTALP').style.display = 'none';
    document.getElementById('CF_AB_CODE_POSTAL').style.display = 'none';
    document.getElementById('CF_AB_CODE').style.display = 'none';
    document.getElementById('CF_AB_CLE_COMPTE').style.display = 'none';
    document.getElementById('CF_AB_CIN').style.display = 'none';
    document.getElementById('CF_AB_ADRESS_FR').style.display = 'none';
    document.getElementById('CF_AB_ADRESS_AR').style.display = 'none';
    document.getElementById('CF_AB_ADRESSP_FR').style.display = 'none';
    document.getElementById('CF_AB_ADRESSP_AR').style.display = 'none';



}

function myFunction10() {
    document.getElementById('RC_PAY_CODE').style.display = 'block';
    document.getElementById('RC_ETAT_CODE').style.display = 'none';
    document.getElementById('RC_COMMUNE_CODE').style.display = 'none';
    document.getElementById('EC_CATEG_CODE').style.display = 'none';
    document.getElementById('RC_BQ_CODBQUE').style.display = 'none';
    document.getElementById('RC_ABCLASS_CODE').style.display = 'none';
    document.getElementById('CF_AB_UF_CODE').style.display = 'none';
    document.getElementById('CF_AB_SOLDE_FINAL').style.display = 'none';
    document.getElementById('CF_AB_SAISONNIER').style.display = 'none';
    document.getElementById('CF_AB_RELANCE').style.display = 'none';
    document.getElementById('CF_AB_REF').style.display = 'none';
    document.getElementById('CF_AB_NUM_COMPTE').style.display = 'none';
    document.getElementById('CF_AB_NUMTEL_MOBILE').style.display = 'none';
    document.getElementById('CF_AB_NUMTEL_FIX').style.display = 'none';
    document.getElementById('CF_AB_NUMFAX').style.display = 'none';
    document.getElementById('CF_').style.display = 'none';
    document.getElementById('AB_NOM_FR').style.display = 'none';
    document.getElementById('CF_AB_NOM_AR').style.display = 'none';
    document.getElementById('CF_AB_NOMP_FR').style.display = 'none';
    document.getElementById('CF_AB_NOMP_AR').style.display = 'none';
    document.getElementById('CF_AB_NBCPTR_ACTIF').style.display = 'none';
    document.getElementById('CF_AB_MENSUALISE').style.display = 'none';
    document.getElementById('CF_AB_MAXDAT_RLC').style.display = 'none';
    document.getElementById('CF_AB_MATRICULE_FISCAL').style.display = 'none';
    document.getElementById('CF_AB_LOCALITE_FR').style.display = 'none';
    document.getElementById('CF_AB_LOCALITE_AR').style.display = 'none';
    document.getElementById('CF_AB_LOCALITEP_FR').style.display = 'none';
    document.getElementById('CF_AB_LOCALITEP_AR').style.display = 'none';
    document.getElementById('CF_AB_IDUTILISATEUR').style.display = 'none';
    document.getElementById('CF_AB_EXONERE').style.display = 'none';
    document.getElementById('CF_AB_EMAIL').style.display = 'none';
    document.getElementById('CF_AB_DAT_RESILIATION').style.display = 'none';
    document.getElementById('CF_AB_DAT_CREATION').style.display = 'none';
    document.getElementById('CF_AB_DATMAJ').style.display = 'none';
    document.getElementById('CF_AB_CPVERSION').style.display = 'none';
    document.getElementById('CF_AB_CODE_POSTALP').style.display = 'none';
    document.getElementById('CF_AB_CODE_POSTAL').style.display = 'none';
    document.getElementById('CF_AB_CODE').style.display = 'none';
    document.getElementById('CF_AB_CLE_COMPTE').style.display = 'none';
    document.getElementById('CF_AB_CIN').style.display = 'none';
    document.getElementById('CF_AB_ADRESS_FR').style.display = 'none';
    document.getElementById('CF_AB_ADRESS_AR').style.display = 'none';
    document.getElementById('CF_AB_ADRESSP_FR').style.display = 'none';
    document.getElementById('CF_AB_ADRESSP_AR').style.display = 'none';



}

function myFunction11() {
    document.getElementById('RC_PAY_CODE').style.display = 'block';
    document.getElementById('RC_ETAT_CODE').style.display = 'none';
    document.getElementById('RC_COMMUNE_CODE').style.display = 'none';
    document.getElementById('EC_CATEG_CODE').style.display = 'none';
    document.getElementById('RC_BQ_CODBQUE').style.display = 'none';
    document.getElementById('RC_ABCLASS_CODE').style.display = 'none';
    document.getElementById('CF_AB_UF_CODE').style.display = 'none';
    document.getElementById('CF_AB_SOLDE_FINAL').style.display = 'none';
    document.getElementById('CF_AB_SAISONNIER').style.display = 'none';
    document.getElementById('CF_AB_RELANCE').style.display = 'none';
    document.getElementById('CF_AB_REF').style.display = 'none';
    document.getElementById('CF_AB_NUM_COMPTE').style.display = 'none';
    document.getElementById('CF_AB_NUMTEL_MOBILE').style.display = 'none';
    document.getElementById('CF_AB_NUMTEL_FIX').style.display = 'none';
    document.getElementById('CF_AB_NUMFAX').style.display = 'none';
    document.getElementById('CF_').style.display = 'none';
    document.getElementById('AB_NOM_FR').style.display = 'none';
    document.getElementById('CF_AB_NOM_AR').style.display = 'none';
    document.getElementById('CF_AB_NOMP_FR').style.display = 'none';
    document.getElementById('CF_AB_NOMP_AR').style.display = 'none';
    document.getElementById('CF_AB_NBCPTR_ACTIF').style.display = 'none';
    document.getElementById('CF_AB_MENSUALISE').style.display = 'none';
    document.getElementById('CF_AB_MAXDAT_RLC').style.display = 'none';
    document.getElementById('CF_AB_MATRICULE_FISCAL').style.display = 'none';
    document.getElementById('CF_AB_LOCALITE_FR').style.display = 'none';
    document.getElementById('CF_AB_LOCALITE_AR').style.display = 'none';
    document.getElementById('CF_AB_LOCALITEP_FR').style.display = 'none';
    document.getElementById('CF_AB_LOCALITEP_AR').style.display = 'none';
    document.getElementById('CF_AB_IDUTILISATEUR').style.display = 'none';
    document.getElementById('CF_AB_EXONERE').style.display = 'none';
    document.getElementById('CF_AB_EMAIL').style.display = 'none';
    document.getElementById('CF_AB_DAT_RESILIATION').style.display = 'none';
    document.getElementById('CF_AB_DAT_CREATION').style.display = 'none';
    document.getElementById('CF_AB_DATMAJ').style.display = 'none';
    document.getElementById('CF_AB_CPVERSION').style.display = 'none';
    document.getElementById('CF_AB_CODE_POSTALP').style.display = 'none';
    document.getElementById('CF_AB_CODE_POSTAL').style.display = 'none';
    document.getElementById('CF_AB_CODE').style.display = 'none';
    document.getElementById('CF_AB_CLE_COMPTE').style.display = 'none';
    document.getElementById('CF_AB_CIN').style.display = 'none';
    document.getElementById('CF_AB_ADRESS_FR').style.display = 'none';
    document.getElementById('CF_AB_ADRESS_AR').style.display = 'none';
    document.getElementById('CF_AB_ADRESSP_FR').style.display = 'none';
    document.getElementById('CF_AB_ADRESSP_AR').style.display = 'none';



}

function myFunction12() {
    document.getElementById('RC_PAY_CODE').style.display = 'block';
    document.getElementById('RC_ETAT_CODE').style.display = 'none';
    document.getElementById('RC_COMMUNE_CODE').style.display = 'none';
    document.getElementById('EC_CATEG_CODE').style.display = 'none';
    document.getElementById('RC_BQ_CODBQUE').style.display = 'none';
    document.getElementById('RC_ABCLASS_CODE').style.display = 'none';
    document.getElementById('CF_AB_UF_CODE').style.display = 'none';
    document.getElementById('CF_AB_SOLDE_FINAL').style.display = 'none';
    document.getElementById('CF_AB_SAISONNIER').style.display = 'none';
    document.getElementById('CF_AB_RELANCE').style.display = 'none';
    document.getElementById('CF_AB_REF').style.display = 'none';
    document.getElementById('CF_AB_NUM_COMPTE').style.display = 'none';
    document.getElementById('CF_AB_NUMTEL_MOBILE').style.display = 'none';
    document.getElementById('CF_AB_NUMTEL_FIX').style.display = 'none';
    document.getElementById('CF_AB_NUMFAX').style.display = 'none';
    document.getElementById('CF_').style.display = 'none';
    document.getElementById('AB_NOM_FR').style.display = 'none';
    document.getElementById('CF_AB_NOM_AR').style.display = 'none';
    document.getElementById('CF_AB_NOMP_FR').style.display = 'none';
    document.getElementById('CF_AB_NOMP_AR').style.display = 'none';
    document.getElementById('CF_AB_NBCPTR_ACTIF').style.display = 'none';
    document.getElementById('CF_AB_MENSUALISE').style.display = 'none';
    document.getElementById('CF_AB_MAXDAT_RLC').style.display = 'none';
    document.getElementById('CF_AB_MATRICULE_FISCAL').style.display = 'none';
    document.getElementById('CF_AB_LOCALITE_FR').style.display = 'none';
    document.getElementById('CF_AB_LOCALITE_AR').style.display = 'none';
    document.getElementById('CF_AB_LOCALITEP_FR').style.display = 'none';
    document.getElementById('CF_AB_LOCALITEP_AR').style.display = 'none';
    document.getElementById('CF_AB_IDUTILISATEUR').style.display = 'none';
    document.getElementById('CF_AB_EXONERE').style.display = 'none';
    document.getElementById('CF_AB_EMAIL').style.display = 'none';
    document.getElementById('CF_AB_DAT_RESILIATION').style.display = 'none';
    document.getElementById('CF_AB_DAT_CREATION').style.display = 'none';
    document.getElementById('CF_AB_DATMAJ').style.display = 'none';
    document.getElementById('CF_AB_CPVERSION').style.display = 'none';
    document.getElementById('CF_AB_CODE_POSTALP').style.display = 'none';
    document.getElementById('CF_AB_CODE_POSTAL').style.display = 'none';
    document.getElementById('CF_AB_CODE').style.display = 'none';
    document.getElementById('CF_AB_CLE_COMPTE').style.display = 'none';
    document.getElementById('CF_AB_CIN').style.display = 'none';
    document.getElementById('CF_AB_ADRESS_FR').style.display = 'none';
    document.getElementById('CF_AB_ADRESS_AR').style.display = 'none';
    document.getElementById('CF_AB_ADRESSP_FR').style.display = 'none';
    document.getElementById('CF_AB_ADRESSP_AR').style.display = 'none';



}

function myFunction13() {
    document.getElementById('RC_PAY_CODE').style.display = 'block';
    document.getElementById('RC_ETAT_CODE').style.display = 'none';
    document.getElementById('RC_COMMUNE_CODE').style.display = 'none';
    document.getElementById('EC_CATEG_CODE').style.display = 'none';
    document.getElementById('RC_BQ_CODBQUE').style.display = 'none';
    document.getElementById('RC_ABCLASS_CODE').style.display = 'none';
    document.getElementById('CF_AB_UF_CODE').style.display = 'none';
    document.getElementById('CF_AB_SOLDE_FINAL').style.display = 'none';
    document.getElementById('CF_AB_SAISONNIER').style.display = 'none';
    document.getElementById('CF_AB_RELANCE').style.display = 'none';
    document.getElementById('CF_AB_REF').style.display = 'none';
    document.getElementById('CF_AB_NUM_COMPTE').style.display = 'none';
    document.getElementById('CF_AB_NUMTEL_MOBILE').style.display = 'none';
    document.getElementById('CF_AB_NUMTEL_FIX').style.display = 'none';
    document.getElementById('CF_AB_NUMFAX').style.display = 'none';
    document.getElementById('CF_').style.display = 'none';
    document.getElementById('AB_NOM_FR').style.display = 'none';
    document.getElementById('CF_AB_NOM_AR').style.display = 'none';
    document.getElementById('CF_AB_NOMP_FR').style.display = 'none';
    document.getElementById('CF_AB_NOMP_AR').style.display = 'none';
    document.getElementById('CF_AB_NBCPTR_ACTIF').style.display = 'none';
    document.getElementById('CF_AB_MENSUALISE').style.display = 'none';
    document.getElementById('CF_AB_MAXDAT_RLC').style.display = 'none';
    document.getElementById('CF_AB_MATRICULE_FISCAL').style.display = 'none';
    document.getElementById('CF_AB_LOCALITE_FR').style.display = 'none';
    document.getElementById('CF_AB_LOCALITE_AR').style.display = 'none';
    document.getElementById('CF_AB_LOCALITEP_FR').style.display = 'none';
    document.getElementById('CF_AB_LOCALITEP_AR').style.display = 'none';
    document.getElementById('CF_AB_IDUTILISATEUR').style.display = 'none';
    document.getElementById('CF_AB_EXONERE').style.display = 'none';
    document.getElementById('CF_AB_EMAIL').style.display = 'none';
    document.getElementById('CF_AB_DAT_RESILIATION').style.display = 'none';
    document.getElementById('CF_AB_DAT_CREATION').style.display = 'none';
    document.getElementById('CF_AB_DATMAJ').style.display = 'none';
    document.getElementById('CF_AB_CPVERSION').style.display = 'none';
    document.getElementById('CF_AB_CODE_POSTALP').style.display = 'none';
    document.getElementById('CF_AB_CODE_POSTAL').style.display = 'none';
    document.getElementById('CF_AB_CODE').style.display = 'none';
    document.getElementById('CF_AB_CLE_COMPTE').style.display = 'none';
    document.getElementById('CF_AB_CIN').style.display = 'none';
    document.getElementById('CF_AB_ADRESS_FR').style.display = 'none';
    document.getElementById('CF_AB_ADRESS_AR').style.display = 'none';
    document.getElementById('CF_AB_ADRESSP_FR').style.display = 'none';
    document.getElementById('CF_AB_ADRESSP_AR').style.display = 'none';



}

function myFunction14() {
    document.getElementById('RC_PAY_CODE').style.display = 'block';
    document.getElementById('RC_ETAT_CODE').style.display = 'none';
    document.getElementById('RC_COMMUNE_CODE').style.display = 'none';
    document.getElementById('EC_CATEG_CODE').style.display = 'none';
    document.getElementById('RC_BQ_CODBQUE').style.display = 'none';
    document.getElementById('RC_ABCLASS_CODE').style.display = 'none';
    document.getElementById('CF_AB_UF_CODE').style.display = 'none';
    document.getElementById('CF_AB_SOLDE_FINAL').style.display = 'none';
    document.getElementById('CF_AB_SAISONNIER').style.display = 'none';
    document.getElementById('CF_AB_RELANCE').style.display = 'none';
    document.getElementById('CF_AB_REF').style.display = 'none';
    document.getElementById('CF_AB_NUM_COMPTE').style.display = 'none';
    document.getElementById('CF_AB_NUMTEL_MOBILE').style.display = 'none';
    document.getElementById('CF_AB_NUMTEL_FIX').style.display = 'none';
    document.getElementById('CF_AB_NUMFAX').style.display = 'none';
    document.getElementById('CF_').style.display = 'none';
    document.getElementById('AB_NOM_FR').style.display = 'none';
    document.getElementById('CF_AB_NOM_AR').style.display = 'none';
    document.getElementById('CF_AB_NOMP_FR').style.display = 'none';
    document.getElementById('CF_AB_NOMP_AR').style.display = 'none';
    document.getElementById('CF_AB_NBCPTR_ACTIF').style.display = 'none';
    document.getElementById('CF_AB_MENSUALISE').style.display = 'none';
    document.getElementById('CF_AB_MAXDAT_RLC').style.display = 'none';
    document.getElementById('CF_AB_MATRICULE_FISCAL').style.display = 'none';
    document.getElementById('CF_AB_LOCALITE_FR').style.display = 'none';
    document.getElementById('CF_AB_LOCALITE_AR').style.display = 'none';
    document.getElementById('CF_AB_LOCALITEP_FR').style.display = 'none';
    document.getElementById('CF_AB_LOCALITEP_AR').style.display = 'none';
    document.getElementById('CF_AB_IDUTILISATEUR').style.display = 'none';
    document.getElementById('CF_AB_EXONERE').style.display = 'none';
    document.getElementById('CF_AB_EMAIL').style.display = 'none';
    document.getElementById('CF_AB_DAT_RESILIATION').style.display = 'none';
    document.getElementById('CF_AB_DAT_CREATION').style.display = 'none';
    document.getElementById('CF_AB_DATMAJ').style.display = 'none';
    document.getElementById('CF_AB_CPVERSION').style.display = 'none';
    document.getElementById('CF_AB_CODE_POSTALP').style.display = 'none';
    document.getElementById('CF_AB_CODE_POSTAL').style.display = 'none';
    document.getElementById('CF_AB_CODE').style.display = 'none';
    document.getElementById('CF_AB_CLE_COMPTE').style.display = 'none';
    document.getElementById('CF_AB_CIN').style.display = 'none';
    document.getElementById('CF_AB_ADRESS_FR').style.display = 'none';
    document.getElementById('CF_AB_ADRESS_AR').style.display = 'none';
    document.getElementById('CF_AB_ADRESSP_FR').style.display = 'none';
    document.getElementById('CF_AB_ADRESSP_AR').style.display = 'none';



}

function myFunction15() {
    document.getElementById('RC_PAY_CODE').style.display = 'block';
    document.getElementById('RC_ETAT_CODE').style.display = 'none';
    document.getElementById('RC_COMMUNE_CODE').style.display = 'none';
    document.getElementById('EC_CATEG_CODE').style.display = 'none';
    document.getElementById('RC_BQ_CODBQUE').style.display = 'none';
    document.getElementById('RC_ABCLASS_CODE').style.display = 'none';
    document.getElementById('CF_AB_UF_CODE').style.display = 'none';
    document.getElementById('CF_AB_SOLDE_FINAL').style.display = 'none';
    document.getElementById('CF_AB_SAISONNIER').style.display = 'none';
    document.getElementById('CF_AB_RELANCE').style.display = 'none';
    document.getElementById('CF_AB_REF').style.display = 'none';
    document.getElementById('CF_AB_NUM_COMPTE').style.display = 'none';
    document.getElementById('CF_AB_NUMTEL_MOBILE').style.display = 'none';
    document.getElementById('CF_AB_NUMTEL_FIX').style.display = 'none';
    document.getElementById('CF_AB_NUMFAX').style.display = 'none';
    document.getElementById('CF_').style.display = 'none';
    document.getElementById('AB_NOM_FR').style.display = 'none';
    document.getElementById('CF_AB_NOM_AR').style.display = 'none';
    document.getElementById('CF_AB_NOMP_FR').style.display = 'none';
    document.getElementById('CF_AB_NOMP_AR').style.display = 'none';
    document.getElementById('CF_AB_NBCPTR_ACTIF').style.display = 'none';
    document.getElementById('CF_AB_MENSUALISE').style.display = 'none';
    document.getElementById('CF_AB_MAXDAT_RLC').style.display = 'none';
    document.getElementById('CF_AB_MATRICULE_FISCAL').style.display = 'none';
    document.getElementById('CF_AB_LOCALITE_FR').style.display = 'none';
    document.getElementById('CF_AB_LOCALITE_AR').style.display = 'none';
    document.getElementById('CF_AB_LOCALITEP_FR').style.display = 'none';
    document.getElementById('CF_AB_LOCALITEP_AR').style.display = 'none';
    document.getElementById('CF_AB_IDUTILISATEUR').style.display = 'none';
    document.getElementById('CF_AB_EXONERE').style.display = 'none';
    document.getElementById('CF_AB_EMAIL').style.display = 'none';
    document.getElementById('CF_AB_DAT_RESILIATION').style.display = 'none';
    document.getElementById('CF_AB_DAT_CREATION').style.display = 'none';
    document.getElementById('CF_AB_DATMAJ').style.display = 'none';
    document.getElementById('CF_AB_CPVERSION').style.display = 'none';
    document.getElementById('CF_AB_CODE_POSTALP').style.display = 'none';
    document.getElementById('CF_AB_CODE_POSTAL').style.display = 'none';
    document.getElementById('CF_AB_CODE').style.display = 'none';
    document.getElementById('CF_AB_CLE_COMPTE').style.display = 'none';
    document.getElementById('CF_AB_CIN').style.display = 'none';
    document.getElementById('CF_AB_ADRESS_FR').style.display = 'none';
    document.getElementById('CF_AB_ADRESS_AR').style.display = 'none';
    document.getElementById('CF_AB_ADRESSP_FR').style.display = 'none';
    document.getElementById('CF_AB_ADRESSP_AR').style.display = 'none';



}

function myFunction16() {
    document.getElementById('RC_PAY_CODE').style.display = 'block';
    document.getElementById('RC_ETAT_CODE').style.display = 'none';
    document.getElementById('RC_COMMUNE_CODE').style.display = 'none';
    document.getElementById('EC_CATEG_CODE').style.display = 'none';
    document.getElementById('RC_BQ_CODBQUE').style.display = 'none';
    document.getElementById('RC_ABCLASS_CODE').style.display = 'none';
    document.getElementById('CF_AB_UF_CODE').style.display = 'none';
    document.getElementById('CF_AB_SOLDE_FINAL').style.display = 'none';
    document.getElementById('CF_AB_SAISONNIER').style.display = 'none';
    document.getElementById('CF_AB_RELANCE').style.display = 'none';
    document.getElementById('CF_AB_REF').style.display = 'none';
    document.getElementById('CF_AB_NUM_COMPTE').style.display = 'none';
    document.getElementById('CF_AB_NUMTEL_MOBILE').style.display = 'none';
    document.getElementById('CF_AB_NUMTEL_FIX').style.display = 'none';
    document.getElementById('CF_AB_NUMFAX').style.display = 'none';
    document.getElementById('CF_').style.display = 'none';
    document.getElementById('AB_NOM_FR').style.display = 'none';
    document.getElementById('CF_AB_NOM_AR').style.display = 'none';
    document.getElementById('CF_AB_NOMP_FR').style.display = 'none';
    document.getElementById('CF_AB_NOMP_AR').style.display = 'none';
    document.getElementById('CF_AB_NBCPTR_ACTIF').style.display = 'none';
    document.getElementById('CF_AB_MENSUALISE').style.display = 'none';
    document.getElementById('CF_AB_MAXDAT_RLC').style.display = 'none';
    document.getElementById('CF_AB_MATRICULE_FISCAL').style.display = 'none';
    document.getElementById('CF_AB_LOCALITE_FR').style.display = 'none';
    document.getElementById('CF_AB_LOCALITE_AR').style.display = 'none';
    document.getElementById('CF_AB_LOCALITEP_FR').style.display = 'none';
    document.getElementById('CF_AB_LOCALITEP_AR').style.display = 'none';
    document.getElementById('CF_AB_IDUTILISATEUR').style.display = 'none';
    document.getElementById('CF_AB_EXONERE').style.display = 'none';
    document.getElementById('CF_AB_EMAIL').style.display = 'none';
    document.getElementById('CF_AB_DAT_RESILIATION').style.display = 'none';
    document.getElementById('CF_AB_DAT_CREATION').style.display = 'none';
    document.getElementById('CF_AB_DATMAJ').style.display = 'none';
    document.getElementById('CF_AB_CPVERSION').style.display = 'none';
    document.getElementById('CF_AB_CODE_POSTALP').style.display = 'none';
    document.getElementById('CF_AB_CODE_POSTAL').style.display = 'none';
    document.getElementById('CF_AB_CODE').style.display = 'none';
    document.getElementById('CF_AB_CLE_COMPTE').style.display = 'none';
    document.getElementById('CF_AB_CIN').style.display = 'none';
    document.getElementById('CF_AB_ADRESS_FR').style.display = 'none';
    document.getElementById('CF_AB_ADRESS_AR').style.display = 'none';
    document.getElementById('CF_AB_ADRESSP_FR').style.display = 'none';
    document.getElementById('CF_AB_ADRESSP_AR').style.display = 'none';



}

function myFunction17() {
    document.getElementById('RC_PAY_CODE').style.display = 'block';
    document.getElementById('RC_ETAT_CODE').style.display = 'none';
    document.getElementById('RC_COMMUNE_CODE').style.display = 'none';
    document.getElementById('EC_CATEG_CODE').style.display = 'none';
    document.getElementById('RC_BQ_CODBQUE').style.display = 'none';
    document.getElementById('RC_ABCLASS_CODE').style.display = 'none';
    document.getElementById('CF_AB_UF_CODE').style.display = 'none';
    document.getElementById('CF_AB_SOLDE_FINAL').style.display = 'none';
    document.getElementById('CF_AB_SAISONNIER').style.display = 'none';
    document.getElementById('CF_AB_RELANCE').style.display = 'none';
    document.getElementById('CF_AB_REF').style.display = 'none';
    document.getElementById('CF_AB_NUM_COMPTE').style.display = 'none';
    document.getElementById('CF_AB_NUMTEL_MOBILE').style.display = 'none';
    document.getElementById('CF_AB_NUMTEL_FIX').style.display = 'none';
    document.getElementById('CF_AB_NUMFAX').style.display = 'none';
    document.getElementById('CF_').style.display = 'none';
    document.getElementById('AB_NOM_FR').style.display = 'none';
    document.getElementById('CF_AB_NOM_AR').style.display = 'none';
    document.getElementById('CF_AB_NOMP_FR').style.display = 'none';
    document.getElementById('CF_AB_NOMP_AR').style.display = 'none';
    document.getElementById('CF_AB_NBCPTR_ACTIF').style.display = 'none';
    document.getElementById('CF_AB_MENSUALISE').style.display = 'none';
    document.getElementById('CF_AB_MAXDAT_RLC').style.display = 'none';
    document.getElementById('CF_AB_MATRICULE_FISCAL').style.display = 'none';
    document.getElementById('CF_AB_LOCALITE_FR').style.display = 'none';
    document.getElementById('CF_AB_LOCALITE_AR').style.display = 'none';
    document.getElementById('CF_AB_LOCALITEP_FR').style.display = 'none';
    document.getElementById('CF_AB_LOCALITEP_AR').style.display = 'none';
    document.getElementById('CF_AB_IDUTILISATEUR').style.display = 'none';
    document.getElementById('CF_AB_EXONERE').style.display = 'none';
    document.getElementById('CF_AB_EMAIL').style.display = 'none';
    document.getElementById('CF_AB_DAT_RESILIATION').style.display = 'none';
    document.getElementById('CF_AB_DAT_CREATION').style.display = 'none';
    document.getElementById('CF_AB_DATMAJ').style.display = 'none';
    document.getElementById('CF_AB_CPVERSION').style.display = 'none';
    document.getElementById('CF_AB_CODE_POSTALP').style.display = 'none';
    document.getElementById('CF_AB_CODE_POSTAL').style.display = 'none';
    document.getElementById('CF_AB_CODE').style.display = 'none';
    document.getElementById('CF_AB_CLE_COMPTE').style.display = 'none';
    document.getElementById('CF_AB_CIN').style.display = 'none';
    document.getElementById('CF_AB_ADRESS_FR').style.display = 'none';
    document.getElementById('CF_AB_ADRESS_AR').style.display = 'none';
    document.getElementById('CF_AB_ADRESSP_FR').style.display = 'none';
    document.getElementById('CF_AB_ADRESSP_AR').style.display = 'none';



}

function myFunction18() {
    document.getElementById('RC_PAY_CODE').style.display = 'block';
    document.getElementById('RC_ETAT_CODE').style.display = 'none';
    document.getElementById('RC_COMMUNE_CODE').style.display = 'none';
    document.getElementById('EC_CATEG_CODE').style.display = 'none';
    document.getElementById('RC_BQ_CODBQUE').style.display = 'none';
    document.getElementById('RC_ABCLASS_CODE').style.display = 'none';
    document.getElementById('CF_AB_UF_CODE').style.display = 'none';
    document.getElementById('CF_AB_SOLDE_FINAL').style.display = 'none';
    document.getElementById('CF_AB_SAISONNIER').style.display = 'none';
    document.getElementById('CF_AB_RELANCE').style.display = 'none';
    document.getElementById('CF_AB_REF').style.display = 'none';
    document.getElementById('CF_AB_NUM_COMPTE').style.display = 'none';
    document.getElementById('CF_AB_NUMTEL_MOBILE').style.display = 'none';
    document.getElementById('CF_AB_NUMTEL_FIX').style.display = 'none';
    document.getElementById('CF_AB_NUMFAX').style.display = 'none';
    document.getElementById('CF_').style.display = 'none';
    document.getElementById('AB_NOM_FR').style.display = 'none';
    document.getElementById('CF_AB_NOM_AR').style.display = 'none';
    document.getElementById('CF_AB_NOMP_FR').style.display = 'none';
    document.getElementById('CF_AB_NOMP_AR').style.display = 'none';
    document.getElementById('CF_AB_NBCPTR_ACTIF').style.display = 'none';
    document.getElementById('CF_AB_MENSUALISE').style.display = 'none';
    document.getElementById('CF_AB_MAXDAT_RLC').style.display = 'none';
    document.getElementById('CF_AB_MATRICULE_FISCAL').style.display = 'none';
    document.getElementById('CF_AB_LOCALITE_FR').style.display = 'none';
    document.getElementById('CF_AB_LOCALITE_AR').style.display = 'none';
    document.getElementById('CF_AB_LOCALITEP_FR').style.display = 'none';
    document.getElementById('CF_AB_LOCALITEP_AR').style.display = 'none';
    document.getElementById('CF_AB_IDUTILISATEUR').style.display = 'none';
    document.getElementById('CF_AB_EXONERE').style.display = 'none';
    document.getElementById('CF_AB_EMAIL').style.display = 'none';
    document.getElementById('CF_AB_DAT_RESILIATION').style.display = 'none';
    document.getElementById('CF_AB_DAT_CREATION').style.display = 'none';
    document.getElementById('CF_AB_DATMAJ').style.display = 'none';
    document.getElementById('CF_AB_CPVERSION').style.display = 'none';
    document.getElementById('CF_AB_CODE_POSTALP').style.display = 'none';
    document.getElementById('CF_AB_CODE_POSTAL').style.display = 'none';
    document.getElementById('CF_AB_CODE').style.display = 'none';
    document.getElementById('CF_AB_CLE_COMPTE').style.display = 'none';
    document.getElementById('CF_AB_CIN').style.display = 'none';
    document.getElementById('CF_AB_ADRESS_FR').style.display = 'none';
    document.getElementById('CF_AB_ADRESS_AR').style.display = 'none';
    document.getElementById('CF_AB_ADRESSP_FR').style.display = 'none';
    document.getElementById('CF_AB_ADRESSP_AR').style.display = 'none';



}

function myFunction19() {
    document.getElementById('RC_PAY_CODE').style.display = 'block';
    document.getElementById('RC_ETAT_CODE').style.display = 'none';
    document.getElementById('RC_COMMUNE_CODE').style.display = 'none';
    document.getElementById('EC_CATEG_CODE').style.display = 'none';
    document.getElementById('RC_BQ_CODBQUE').style.display = 'none';
    document.getElementById('RC_ABCLASS_CODE').style.display = 'none';
    document.getElementById('CF_AB_UF_CODE').style.display = 'none';
    document.getElementById('CF_AB_SOLDE_FINAL').style.display = 'none';
    document.getElementById('CF_AB_SAISONNIER').style.display = 'none';
    document.getElementById('CF_AB_RELANCE').style.display = 'none';
    document.getElementById('CF_AB_REF').style.display = 'none';
    document.getElementById('CF_AB_NUM_COMPTE').style.display = 'none';
    document.getElementById('CF_AB_NUMTEL_MOBILE').style.display = 'none';
    document.getElementById('CF_AB_NUMTEL_FIX').style.display = 'none';
    document.getElementById('CF_AB_NUMFAX').style.display = 'none';
    document.getElementById('CF_').style.display = 'none';
    document.getElementById('AB_NOM_FR').style.display = 'none';
    document.getElementById('CF_AB_NOM_AR').style.display = 'none';
    document.getElementById('CF_AB_NOMP_FR').style.display = 'none';
    document.getElementById('CF_AB_NOMP_AR').style.display = 'none';
    document.getElementById('CF_AB_NBCPTR_ACTIF').style.display = 'none';
    document.getElementById('CF_AB_MENSUALISE').style.display = 'none';
    document.getElementById('CF_AB_MAXDAT_RLC').style.display = 'none';
    document.getElementById('CF_AB_MATRICULE_FISCAL').style.display = 'none';
    document.getElementById('CF_AB_LOCALITE_FR').style.display = 'none';
    document.getElementById('CF_AB_LOCALITE_AR').style.display = 'none';
    document.getElementById('CF_AB_LOCALITEP_FR').style.display = 'none';
    document.getElementById('CF_AB_LOCALITEP_AR').style.display = 'none';
    document.getElementById('CF_AB_IDUTILISATEUR').style.display = 'none';
    document.getElementById('CF_AB_EXONERE').style.display = 'none';
    document.getElementById('CF_AB_EMAIL').style.display = 'none';
    document.getElementById('CF_AB_DAT_RESILIATION').style.display = 'none';
    document.getElementById('CF_AB_DAT_CREATION').style.display = 'none';
    document.getElementById('CF_AB_DATMAJ').style.display = 'none';
    document.getElementById('CF_AB_CPVERSION').style.display = 'none';
    document.getElementById('CF_AB_CODE_POSTALP').style.display = 'none';
    document.getElementById('CF_AB_CODE_POSTAL').style.display = 'none';
    document.getElementById('CF_AB_CODE').style.display = 'none';
    document.getElementById('CF_AB_CLE_COMPTE').style.display = 'none';
    document.getElementById('CF_AB_CIN').style.display = 'none';
    document.getElementById('CF_AB_ADRESS_FR').style.display = 'none';
    document.getElementById('CF_AB_ADRESS_AR').style.display = 'none';
    document.getElementById('CF_AB_ADRESSP_FR').style.display = 'none';
    document.getElementById('CF_AB_ADRESSP_AR').style.display = 'none';



}

function myFunction20() {
    document.getElementById('RC_PAY_CODE').style.display = 'block';
    document.getElementById('RC_ETAT_CODE').style.display = 'none';
    document.getElementById('RC_COMMUNE_CODE').style.display = 'none';
    document.getElementById('EC_CATEG_CODE').style.display = 'none';
    document.getElementById('RC_BQ_CODBQUE').style.display = 'none';
    document.getElementById('RC_ABCLASS_CODE').style.display = 'none';
    document.getElementById('CF_AB_UF_CODE').style.display = 'none';
    document.getElementById('CF_AB_SOLDE_FINAL').style.display = 'none';
    document.getElementById('CF_AB_SAISONNIER').style.display = 'none';
    document.getElementById('CF_AB_RELANCE').style.display = 'none';
    document.getElementById('CF_AB_REF').style.display = 'none';
    document.getElementById('CF_AB_NUM_COMPTE').style.display = 'none';
    document.getElementById('CF_AB_NUMTEL_MOBILE').style.display = 'none';
    document.getElementById('CF_AB_NUMTEL_FIX').style.display = 'none';
    document.getElementById('CF_AB_NUMFAX').style.display = 'none';
    document.getElementById('CF_').style.display = 'none';
    document.getElementById('AB_NOM_FR').style.display = 'none';
    document.getElementById('CF_AB_NOM_AR').style.display = 'none';
    document.getElementById('CF_AB_NOMP_FR').style.display = 'none';
    document.getElementById('CF_AB_NOMP_AR').style.display = 'none';
    document.getElementById('CF_AB_NBCPTR_ACTIF').style.display = 'none';
    document.getElementById('CF_AB_MENSUALISE').style.display = 'none';
    document.getElementById('CF_AB_MAXDAT_RLC').style.display = 'none';
    document.getElementById('CF_AB_MATRICULE_FISCAL').style.display = 'none';
    document.getElementById('CF_AB_LOCALITE_FR').style.display = 'none';
    document.getElementById('CF_AB_LOCALITE_AR').style.display = 'none';
    document.getElementById('CF_AB_LOCALITEP_FR').style.display = 'none';
    document.getElementById('CF_AB_LOCALITEP_AR').style.display = 'none';
    document.getElementById('CF_AB_IDUTILISATEUR').style.display = 'none';
    document.getElementById('CF_AB_EXONERE').style.display = 'none';
    document.getElementById('CF_AB_EMAIL').style.display = 'none';
    document.getElementById('CF_AB_DAT_RESILIATION').style.display = 'none';
    document.getElementById('CF_AB_DAT_CREATION').style.display = 'none';
    document.getElementById('CF_AB_DATMAJ').style.display = 'none';
    document.getElementById('CF_AB_CPVERSION').style.display = 'none';
    document.getElementById('CF_AB_CODE_POSTALP').style.display = 'none';
    document.getElementById('CF_AB_CODE_POSTAL').style.display = 'none';
    document.getElementById('CF_AB_CODE').style.display = 'none';
    document.getElementById('CF_AB_CLE_COMPTE').style.display = 'none';
    document.getElementById('CF_AB_CIN').style.display = 'none';
    document.getElementById('CF_AB_ADRESS_FR').style.display = 'none';
    document.getElementById('CF_AB_ADRESS_AR').style.display = 'none';
    document.getElementById('CF_AB_ADRESSP_FR').style.display = 'none';
    document.getElementById('CF_AB_ADRESSP_AR').style.display = 'none';



}

function myFunction21() {
    document.getElementById('RC_PAY_CODE').style.display = 'block';
    document.getElementById('RC_ETAT_CODE').style.display = 'none';
    document.getElementById('RC_COMMUNE_CODE').style.display = 'none';
    document.getElementById('EC_CATEG_CODE').style.display = 'none';
    document.getElementById('RC_BQ_CODBQUE').style.display = 'none';
    document.getElementById('RC_ABCLASS_CODE').style.display = 'none';
    document.getElementById('CF_AB_UF_CODE').style.display = 'none';
    document.getElementById('CF_AB_SOLDE_FINAL').style.display = 'none';
    document.getElementById('CF_AB_SAISONNIER').style.display = 'none';
    document.getElementById('CF_AB_RELANCE').style.display = 'none';
    document.getElementById('CF_AB_REF').style.display = 'none';
    document.getElementById('CF_AB_NUM_COMPTE').style.display = 'none';
    document.getElementById('CF_AB_NUMTEL_MOBILE').style.display = 'none';
    document.getElementById('CF_AB_NUMTEL_FIX').style.display = 'none';
    document.getElementById('CF_AB_NUMFAX').style.display = 'none';
    document.getElementById('CF_').style.display = 'none';
    document.getElementById('AB_NOM_FR').style.display = 'none';
    document.getElementById('CF_AB_NOM_AR').style.display = 'none';
    document.getElementById('CF_AB_NOMP_FR').style.display = 'none';
    document.getElementById('CF_AB_NOMP_AR').style.display = 'none';
    document.getElementById('CF_AB_NBCPTR_ACTIF').style.display = 'none';
    document.getElementById('CF_AB_MENSUALISE').style.display = 'none';
    document.getElementById('CF_AB_MAXDAT_RLC').style.display = 'none';
    document.getElementById('CF_AB_MATRICULE_FISCAL').style.display = 'none';
    document.getElementById('CF_AB_LOCALITE_FR').style.display = 'none';
    document.getElementById('CF_AB_LOCALITE_AR').style.display = 'none';
    document.getElementById('CF_AB_LOCALITEP_FR').style.display = 'none';
    document.getElementById('CF_AB_LOCALITEP_AR').style.display = 'none';
    document.getElementById('CF_AB_IDUTILISATEUR').style.display = 'none';
    document.getElementById('CF_AB_EXONERE').style.display = 'none';
    document.getElementById('CF_AB_EMAIL').style.display = 'none';
    document.getElementById('CF_AB_DAT_RESILIATION').style.display = 'none';
    document.getElementById('CF_AB_DAT_CREATION').style.display = 'none';
    document.getElementById('CF_AB_DATMAJ').style.display = 'none';
    document.getElementById('CF_AB_CPVERSION').style.display = 'none';
    document.getElementById('CF_AB_CODE_POSTALP').style.display = 'none';
    document.getElementById('CF_AB_CODE_POSTAL').style.display = 'none';
    document.getElementById('CF_AB_CODE').style.display = 'none';
    document.getElementById('CF_AB_CLE_COMPTE').style.display = 'none';
    document.getElementById('CF_AB_CIN').style.display = 'none';
    document.getElementById('CF_AB_ADRESS_FR').style.display = 'none';
    document.getElementById('CF_AB_ADRESS_AR').style.display = 'none';
    document.getElementById('CF_AB_ADRESSP_FR').style.display = 'none';
    document.getElementById('CF_AB_ADRESSP_AR').style.display = 'none';



}

function myFunction22() {
    document.getElementById('RC_PAY_CODE').style.display = 'block';
    document.getElementById('RC_ETAT_CODE').style.display = 'none';
    document.getElementById('RC_COMMUNE_CODE').style.display = 'none';
    document.getElementById('EC_CATEG_CODE').style.display = 'none';
    document.getElementById('RC_BQ_CODBQUE').style.display = 'none';
    document.getElementById('RC_ABCLASS_CODE').style.display = 'none';
    document.getElementById('CF_AB_UF_CODE').style.display = 'none';
    document.getElementById('CF_AB_SOLDE_FINAL').style.display = 'none';
    document.getElementById('CF_AB_SAISONNIER').style.display = 'none';
    document.getElementById('CF_AB_RELANCE').style.display = 'none';
    document.getElementById('CF_AB_REF').style.display = 'none';
    document.getElementById('CF_AB_NUM_COMPTE').style.display = 'none';
    document.getElementById('CF_AB_NUMTEL_MOBILE').style.display = 'none';
    document.getElementById('CF_AB_NUMTEL_FIX').style.display = 'none';
    document.getElementById('CF_AB_NUMFAX').style.display = 'none';
    document.getElementById('CF_').style.display = 'none';
    document.getElementById('AB_NOM_FR').style.display = 'none';
    document.getElementById('CF_AB_NOM_AR').style.display = 'none';
    document.getElementById('CF_AB_NOMP_FR').style.display = 'none';
    document.getElementById('CF_AB_NOMP_AR').style.display = 'none';
    document.getElementById('CF_AB_NBCPTR_ACTIF').style.display = 'none';
    document.getElementById('CF_AB_MENSUALISE').style.display = 'none';
    document.getElementById('CF_AB_MAXDAT_RLC').style.display = 'none';
    document.getElementById('CF_AB_MATRICULE_FISCAL').style.display = 'none';
    document.getElementById('CF_AB_LOCALITE_FR').style.display = 'none';
    document.getElementById('CF_AB_LOCALITE_AR').style.display = 'none';
    document.getElementById('CF_AB_LOCALITEP_FR').style.display = 'none';
    document.getElementById('CF_AB_LOCALITEP_AR').style.display = 'none';
    document.getElementById('CF_AB_IDUTILISATEUR').style.display = 'none';
    document.getElementById('CF_AB_EXONERE').style.display = 'none';
    document.getElementById('CF_AB_EMAIL').style.display = 'none';
    document.getElementById('CF_AB_DAT_RESILIATION').style.display = 'none';
    document.getElementById('CF_AB_DAT_CREATION').style.display = 'none';
    document.getElementById('CF_AB_DATMAJ').style.display = 'none';
    document.getElementById('CF_AB_CPVERSION').style.display = 'none';
    document.getElementById('CF_AB_CODE_POSTALP').style.display = 'none';
    document.getElementById('CF_AB_CODE_POSTAL').style.display = 'none';
    document.getElementById('CF_AB_CODE').style.display = 'none';
    document.getElementById('CF_AB_CLE_COMPTE').style.display = 'none';
    document.getElementById('CF_AB_CIN').style.display = 'none';
    document.getElementById('CF_AB_ADRESS_FR').style.display = 'none';
    document.getElementById('CF_AB_ADRESS_AR').style.display = 'none';
    document.getElementById('CF_AB_ADRESSP_FR').style.display = 'none';
    document.getElementById('CF_AB_ADRESSP_AR').style.display = 'none';



}

function myFunction23() {
    document.getElementById('RC_PAY_CODE').style.display = 'block';
    document.getElementById('RC_ETAT_CODE').style.display = 'none';
    document.getElementById('RC_COMMUNE_CODE').style.display = 'none';
    document.getElementById('EC_CATEG_CODE').style.display = 'none';
    document.getElementById('RC_BQ_CODBQUE').style.display = 'none';
    document.getElementById('RC_ABCLASS_CODE').style.display = 'none';
    document.getElementById('CF_AB_UF_CODE').style.display = 'none';
    document.getElementById('CF_AB_SOLDE_FINAL').style.display = 'none';
    document.getElementById('CF_AB_SAISONNIER').style.display = 'none';
    document.getElementById('CF_AB_RELANCE').style.display = 'none';
    document.getElementById('CF_AB_REF').style.display = 'none';
    document.getElementById('CF_AB_NUM_COMPTE').style.display = 'none';
    document.getElementById('CF_AB_NUMTEL_MOBILE').style.display = 'none';
    document.getElementById('CF_AB_NUMTEL_FIX').style.display = 'none';
    document.getElementById('CF_AB_NUMFAX').style.display = 'none';
    document.getElementById('CF_').style.display = 'none';
    document.getElementById('AB_NOM_FR').style.display = 'none';
    document.getElementById('CF_AB_NOM_AR').style.display = 'none';
    document.getElementById('CF_AB_NOMP_FR').style.display = 'none';
    document.getElementById('CF_AB_NOMP_AR').style.display = 'none';
    document.getElementById('CF_AB_NBCPTR_ACTIF').style.display = 'none';
    document.getElementById('CF_AB_MENSUALISE').style.display = 'none';
    document.getElementById('CF_AB_MAXDAT_RLC').style.display = 'none';
    document.getElementById('CF_AB_MATRICULE_FISCAL').style.display = 'none';
    document.getElementById('CF_AB_LOCALITE_FR').style.display = 'none';
    document.getElementById('CF_AB_LOCALITE_AR').style.display = 'none';
    document.getElementById('CF_AB_LOCALITEP_FR').style.display = 'none';
    document.getElementById('CF_AB_LOCALITEP_AR').style.display = 'none';
    document.getElementById('CF_AB_IDUTILISATEUR').style.display = 'none';
    document.getElementById('CF_AB_EXONERE').style.display = 'none';
    document.getElementById('CF_AB_EMAIL').style.display = 'none';
    document.getElementById('CF_AB_DAT_RESILIATION').style.display = 'none';
    document.getElementById('CF_AB_DAT_CREATION').style.display = 'none';
    document.getElementById('CF_AB_DATMAJ').style.display = 'none';
    document.getElementById('CF_AB_CPVERSION').style.display = 'none';
    document.getElementById('CF_AB_CODE_POSTALP').style.display = 'none';
    document.getElementById('CF_AB_CODE_POSTAL').style.display = 'none';
    document.getElementById('CF_AB_CODE').style.display = 'none';
    document.getElementById('CF_AB_CLE_COMPTE').style.display = 'none';
    document.getElementById('CF_AB_CIN').style.display = 'none';
    document.getElementById('CF_AB_ADRESS_FR').style.display = 'none';
    document.getElementById('CF_AB_ADRESS_AR').style.display = 'none';
    document.getElementById('CF_AB_ADRESSP_FR').style.display = 'none';
    document.getElementById('CF_AB_ADRESSP_AR').style.display = 'none';



}

function myFunction24() {
    document.getElementById('RC_PAY_CODE').style.display = 'block';
    document.getElementById('RC_ETAT_CODE').style.display = 'none';
    document.getElementById('RC_COMMUNE_CODE').style.display = 'none';
    document.getElementById('EC_CATEG_CODE').style.display = 'none';
    document.getElementById('RC_BQ_CODBQUE').style.display = 'none';
    document.getElementById('RC_ABCLASS_CODE').style.display = 'none';
    document.getElementById('CF_AB_UF_CODE').style.display = 'none';
    document.getElementById('CF_AB_SOLDE_FINAL').style.display = 'none';
    document.getElementById('CF_AB_SAISONNIER').style.display = 'none';
    document.getElementById('CF_AB_RELANCE').style.display = 'none';
    document.getElementById('CF_AB_REF').style.display = 'none';
    document.getElementById('CF_AB_NUM_COMPTE').style.display = 'none';
    document.getElementById('CF_AB_NUMTEL_MOBILE').style.display = 'none';
    document.getElementById('CF_AB_NUMTEL_FIX').style.display = 'none';
    document.getElementById('CF_AB_NUMFAX').style.display = 'none';
    document.getElementById('CF_').style.display = 'none';
    document.getElementById('AB_NOM_FR').style.display = 'none';
    document.getElementById('CF_AB_NOM_AR').style.display = 'none';
    document.getElementById('CF_AB_NOMP_FR').style.display = 'none';
    document.getElementById('CF_AB_NOMP_AR').style.display = 'none';
    document.getElementById('CF_AB_NBCPTR_ACTIF').style.display = 'none';
    document.getElementById('CF_AB_MENSUALISE').style.display = 'none';
    document.getElementById('CF_AB_MAXDAT_RLC').style.display = 'none';
    document.getElementById('CF_AB_MATRICULE_FISCAL').style.display = 'none';
    document.getElementById('CF_AB_LOCALITE_FR').style.display = 'none';
    document.getElementById('CF_AB_LOCALITE_AR').style.display = 'none';
    document.getElementById('CF_AB_LOCALITEP_FR').style.display = 'none';
    document.getElementById('CF_AB_LOCALITEP_AR').style.display = 'none';
    document.getElementById('CF_AB_IDUTILISATEUR').style.display = 'none';
    document.getElementById('CF_AB_EXONERE').style.display = 'none';
    document.getElementById('CF_AB_EMAIL').style.display = 'none';
    document.getElementById('CF_AB_DAT_RESILIATION').style.display = 'none';
    document.getElementById('CF_AB_DAT_CREATION').style.display = 'none';
    document.getElementById('CF_AB_DATMAJ').style.display = 'none';
    document.getElementById('CF_AB_CPVERSION').style.display = 'none';
    document.getElementById('CF_AB_CODE_POSTALP').style.display = 'none';
    document.getElementById('CF_AB_CODE_POSTAL').style.display = 'none';
    document.getElementById('CF_AB_CODE').style.display = 'none';
    document.getElementById('CF_AB_CLE_COMPTE').style.display = 'none';
    document.getElementById('CF_AB_CIN').style.display = 'none';
    document.getElementById('CF_AB_ADRESS_FR').style.display = 'none';
    document.getElementById('CF_AB_ADRESS_AR').style.display = 'none';
    document.getElementById('CF_AB_ADRESSP_FR').style.display = 'none';
    document.getElementById('CF_AB_ADRESSP_AR').style.display = 'none';



}

function myFunction25() {
    document.getElementById('RC_PAY_CODE').style.display = 'block';
    document.getElementById('RC_ETAT_CODE').style.display = 'none';
    document.getElementById('RC_COMMUNE_CODE').style.display = 'none';
    document.getElementById('EC_CATEG_CODE').style.display = 'none';
    document.getElementById('RC_BQ_CODBQUE').style.display = 'none';
    document.getElementById('RC_ABCLASS_CODE').style.display = 'none';
    document.getElementById('CF_AB_UF_CODE').style.display = 'none';
    document.getElementById('CF_AB_SOLDE_FINAL').style.display = 'none';
    document.getElementById('CF_AB_SAISONNIER').style.display = 'none';
    document.getElementById('CF_AB_RELANCE').style.display = 'none';
    document.getElementById('CF_AB_REF').style.display = 'none';
    document.getElementById('CF_AB_NUM_COMPTE').style.display = 'none';
    document.getElementById('CF_AB_NUMTEL_MOBILE').style.display = 'none';
    document.getElementById('CF_AB_NUMTEL_FIX').style.display = 'none';
    document.getElementById('CF_AB_NUMFAX').style.display = 'none';
    document.getElementById('CF_').style.display = 'none';
    document.getElementById('AB_NOM_FR').style.display = 'none';
    document.getElementById('CF_AB_NOM_AR').style.display = 'none';
    document.getElementById('CF_AB_NOMP_FR').style.display = 'none';
    document.getElementById('CF_AB_NOMP_AR').style.display = 'none';
    document.getElementById('CF_AB_NBCPTR_ACTIF').style.display = 'none';
    document.getElementById('CF_AB_MENSUALISE').style.display = 'none';
    document.getElementById('CF_AB_MAXDAT_RLC').style.display = 'none';
    document.getElementById('CF_AB_MATRICULE_FISCAL').style.display = 'none';
    document.getElementById('CF_AB_LOCALITE_FR').style.display = 'none';
    document.getElementById('CF_AB_LOCALITE_AR').style.display = 'none';
    document.getElementById('CF_AB_LOCALITEP_FR').style.display = 'none';
    document.getElementById('CF_AB_LOCALITEP_AR').style.display = 'none';
    document.getElementById('CF_AB_IDUTILISATEUR').style.display = 'none';
    document.getElementById('CF_AB_EXONERE').style.display = 'none';
    document.getElementById('CF_AB_EMAIL').style.display = 'none';
    document.getElementById('CF_AB_DAT_RESILIATION').style.display = 'none';
    document.getElementById('CF_AB_DAT_CREATION').style.display = 'none';
    document.getElementById('CF_AB_DATMAJ').style.display = 'none';
    document.getElementById('CF_AB_CPVERSION').style.display = 'none';
    document.getElementById('CF_AB_CODE_POSTALP').style.display = 'none';
    document.getElementById('CF_AB_CODE_POSTAL').style.display = 'none';
    document.getElementById('CF_AB_CODE').style.display = 'none';
    document.getElementById('CF_AB_CLE_COMPTE').style.display = 'none';
    document.getElementById('CF_AB_CIN').style.display = 'none';
    document.getElementById('CF_AB_ADRESS_FR').style.display = 'none';
    document.getElementById('CF_AB_ADRESS_AR').style.display = 'none';
    document.getElementById('CF_AB_ADRESSP_FR').style.display = 'none';
    document.getElementById('CF_AB_ADRESSP_AR').style.display = 'none';



}

function myFunction26() {
    document.getElementById('RC_PAY_CODE').style.display = 'block';
    document.getElementById('RC_ETAT_CODE').style.display = 'none';
    document.getElementById('RC_COMMUNE_CODE').style.display = 'none';
    document.getElementById('EC_CATEG_CODE').style.display = 'none';
    document.getElementById('RC_BQ_CODBQUE').style.display = 'none';
    document.getElementById('RC_ABCLASS_CODE').style.display = 'none';
    document.getElementById('CF_AB_UF_CODE').style.display = 'none';
    document.getElementById('CF_AB_SOLDE_FINAL').style.display = 'none';
    document.getElementById('CF_AB_SAISONNIER').style.display = 'none';
    document.getElementById('CF_AB_RELANCE').style.display = 'none';
    document.getElementById('CF_AB_REF').style.display = 'none';
    document.getElementById('CF_AB_NUM_COMPTE').style.display = 'none';
    document.getElementById('CF_AB_NUMTEL_MOBILE').style.display = 'none';
    document.getElementById('CF_AB_NUMTEL_FIX').style.display = 'none';
    document.getElementById('CF_AB_NUMFAX').style.display = 'none';
    document.getElementById('CF_').style.display = 'none';
    document.getElementById('AB_NOM_FR').style.display = 'none';
    document.getElementById('CF_AB_NOM_AR').style.display = 'none';
    document.getElementById('CF_AB_NOMP_FR').style.display = 'none';
    document.getElementById('CF_AB_NOMP_AR').style.display = 'none';
    document.getElementById('CF_AB_NBCPTR_ACTIF').style.display = 'none';
    document.getElementById('CF_AB_MENSUALISE').style.display = 'none';
    document.getElementById('CF_AB_MAXDAT_RLC').style.display = 'none';
    document.getElementById('CF_AB_MATRICULE_FISCAL').style.display = 'none';
    document.getElementById('CF_AB_LOCALITE_FR').style.display = 'none';
    document.getElementById('CF_AB_LOCALITE_AR').style.display = 'none';
    document.getElementById('CF_AB_LOCALITEP_FR').style.display = 'none';
    document.getElementById('CF_AB_LOCALITEP_AR').style.display = 'none';
    document.getElementById('CF_AB_IDUTILISATEUR').style.display = 'none';
    document.getElementById('CF_AB_EXONERE').style.display = 'none';
    document.getElementById('CF_AB_EMAIL').style.display = 'none';
    document.getElementById('CF_AB_DAT_RESILIATION').style.display = 'none';
    document.getElementById('CF_AB_DAT_CREATION').style.display = 'none';
    document.getElementById('CF_AB_DATMAJ').style.display = 'none';
    document.getElementById('CF_AB_CPVERSION').style.display = 'none';
    document.getElementById('CF_AB_CODE_POSTALP').style.display = 'none';
    document.getElementById('CF_AB_CODE_POSTAL').style.display = 'none';
    document.getElementById('CF_AB_CODE').style.display = 'none';
    document.getElementById('CF_AB_CLE_COMPTE').style.display = 'none';
    document.getElementById('CF_AB_CIN').style.display = 'none';
    document.getElementById('CF_AB_ADRESS_FR').style.display = 'none';
    document.getElementById('CF_AB_ADRESS_AR').style.display = 'none';
    document.getElementById('CF_AB_ADRESSP_FR').style.display = 'none';
    document.getElementById('CF_AB_ADRESSP_AR').style.display = 'none';



}

function myFunction27() {
    document.getElementById('RC_PAY_CODE').style.display = 'block';
    document.getElementById('RC_ETAT_CODE').style.display = 'none';
    document.getElementById('RC_COMMUNE_CODE').style.display = 'none';
    document.getElementById('EC_CATEG_CODE').style.display = 'none';
    document.getElementById('RC_BQ_CODBQUE').style.display = 'none';
    document.getElementById('RC_ABCLASS_CODE').style.display = 'none';
    document.getElementById('CF_AB_UF_CODE').style.display = 'none';
    document.getElementById('CF_AB_SOLDE_FINAL').style.display = 'none';
    document.getElementById('CF_AB_SAISONNIER').style.display = 'none';
    document.getElementById('CF_AB_RELANCE').style.display = 'none';
    document.getElementById('CF_AB_REF').style.display = 'none';
    document.getElementById('CF_AB_NUM_COMPTE').style.display = 'none';
    document.getElementById('CF_AB_NUMTEL_MOBILE').style.display = 'none';
    document.getElementById('CF_AB_NUMTEL_FIX').style.display = 'none';
    document.getElementById('CF_AB_NUMFAX').style.display = 'none';
    document.getElementById('CF_').style.display = 'none';
    document.getElementById('AB_NOM_FR').style.display = 'none';
    document.getElementById('CF_AB_NOM_AR').style.display = 'none';
    document.getElementById('CF_AB_NOMP_FR').style.display = 'none';
    document.getElementById('CF_AB_NOMP_AR').style.display = 'none';
    document.getElementById('CF_AB_NBCPTR_ACTIF').style.display = 'none';
    document.getElementById('CF_AB_MENSUALISE').style.display = 'none';
    document.getElementById('CF_AB_MAXDAT_RLC').style.display = 'none';
    document.getElementById('CF_AB_MATRICULE_FISCAL').style.display = 'none';
    document.getElementById('CF_AB_LOCALITE_FR').style.display = 'none';
    document.getElementById('CF_AB_LOCALITE_AR').style.display = 'none';
    document.getElementById('CF_AB_LOCALITEP_FR').style.display = 'none';
    document.getElementById('CF_AB_LOCALITEP_AR').style.display = 'none';
    document.getElementById('CF_AB_IDUTILISATEUR').style.display = 'none';
    document.getElementById('CF_AB_EXONERE').style.display = 'none';
    document.getElementById('CF_AB_EMAIL').style.display = 'none';
    document.getElementById('CF_AB_DAT_RESILIATION').style.display = 'none';
    document.getElementById('CF_AB_DAT_CREATION').style.display = 'none';
    document.getElementById('CF_AB_DATMAJ').style.display = 'none';
    document.getElementById('CF_AB_CPVERSION').style.display = 'none';
    document.getElementById('CF_AB_CODE_POSTALP').style.display = 'none';
    document.getElementById('CF_AB_CODE_POSTAL').style.display = 'none';
    document.getElementById('CF_AB_CODE').style.display = 'none';
    document.getElementById('CF_AB_CLE_COMPTE').style.display = 'none';
    document.getElementById('CF_AB_CIN').style.display = 'none';
    document.getElementById('CF_AB_ADRESS_FR').style.display = 'none';
    document.getElementById('CF_AB_ADRESS_AR').style.display = 'none';
    document.getElementById('CF_AB_ADRESSP_FR').style.display = 'none';
    document.getElementById('CF_AB_ADRESSP_AR').style.display = 'none';



}

function myFunction28() {
    document.getElementById('RC_PAY_CODE').style.display = 'block';
    document.getElementById('RC_ETAT_CODE').style.display = 'none';
    document.getElementById('RC_COMMUNE_CODE').style.display = 'none';
    document.getElementById('EC_CATEG_CODE').style.display = 'none';
    document.getElementById('RC_BQ_CODBQUE').style.display = 'none';
    document.getElementById('RC_ABCLASS_CODE').style.display = 'none';
    document.getElementById('CF_AB_UF_CODE').style.display = 'none';
    document.getElementById('CF_AB_SOLDE_FINAL').style.display = 'none';
    document.getElementById('CF_AB_SAISONNIER').style.display = 'none';
    document.getElementById('CF_AB_RELANCE').style.display = 'none';
    document.getElementById('CF_AB_REF').style.display = 'none';
    document.getElementById('CF_AB_NUM_COMPTE').style.display = 'none';
    document.getElementById('CF_AB_NUMTEL_MOBILE').style.display = 'none';
    document.getElementById('CF_AB_NUMTEL_FIX').style.display = 'none';
    document.getElementById('CF_AB_NUMFAX').style.display = 'none';
    document.getElementById('CF_').style.display = 'none';
    document.getElementById('AB_NOM_FR').style.display = 'none';
    document.getElementById('CF_AB_NOM_AR').style.display = 'none';
    document.getElementById('CF_AB_NOMP_FR').style.display = 'none';
    document.getElementById('CF_AB_NOMP_AR').style.display = 'none';
    document.getElementById('CF_AB_NBCPTR_ACTIF').style.display = 'none';
    document.getElementById('CF_AB_MENSUALISE').style.display = 'none';
    document.getElementById('CF_AB_MAXDAT_RLC').style.display = 'none';
    document.getElementById('CF_AB_MATRICULE_FISCAL').style.display = 'none';
    document.getElementById('CF_AB_LOCALITE_FR').style.display = 'none';
    document.getElementById('CF_AB_LOCALITE_AR').style.display = 'none';
    document.getElementById('CF_AB_LOCALITEP_FR').style.display = 'none';
    document.getElementById('CF_AB_LOCALITEP_AR').style.display = 'none';
    document.getElementById('CF_AB_IDUTILISATEUR').style.display = 'none';
    document.getElementById('CF_AB_EXONERE').style.display = 'none';
    document.getElementById('CF_AB_EMAIL').style.display = 'none';
    document.getElementById('CF_AB_DAT_RESILIATION').style.display = 'none';
    document.getElementById('CF_AB_DAT_CREATION').style.display = 'none';
    document.getElementById('CF_AB_DATMAJ').style.display = 'none';
    document.getElementById('CF_AB_CPVERSION').style.display = 'none';
    document.getElementById('CF_AB_CODE_POSTALP').style.display = 'none';
    document.getElementById('CF_AB_CODE_POSTAL').style.display = 'none';
    document.getElementById('CF_AB_CODE').style.display = 'none';
    document.getElementById('CF_AB_CLE_COMPTE').style.display = 'none';
    document.getElementById('CF_AB_CIN').style.display = 'none';
    document.getElementById('CF_AB_ADRESS_FR').style.display = 'none';
    document.getElementById('CF_AB_ADRESS_AR').style.display = 'none';
    document.getElementById('CF_AB_ADRESSP_FR').style.display = 'none';
    document.getElementById('CF_AB_ADRESSP_AR').style.display = 'none';



}

function myFunction29() {
    document.getElementById('RC_PAY_CODE').style.display = 'block';
    document.getElementById('RC_ETAT_CODE').style.display = 'none';
    document.getElementById('RC_COMMUNE_CODE').style.display = 'none';
    document.getElementById('EC_CATEG_CODE').style.display = 'none';
    document.getElementById('RC_BQ_CODBQUE').style.display = 'none';
    document.getElementById('RC_ABCLASS_CODE').style.display = 'none';
    document.getElementById('CF_AB_UF_CODE').style.display = 'none';
    document.getElementById('CF_AB_SOLDE_FINAL').style.display = 'none';
    document.getElementById('CF_AB_SAISONNIER').style.display = 'none';
    document.getElementById('CF_AB_RELANCE').style.display = 'none';
    document.getElementById('CF_AB_REF').style.display = 'none';
    document.getElementById('CF_AB_NUM_COMPTE').style.display = 'none';
    document.getElementById('CF_AB_NUMTEL_MOBILE').style.display = 'none';
    document.getElementById('CF_AB_NUMTEL_FIX').style.display = 'none';
    document.getElementById('CF_AB_NUMFAX').style.display = 'none';
    document.getElementById('CF_').style.display = 'none';
    document.getElementById('AB_NOM_FR').style.display = 'none';
    document.getElementById('CF_AB_NOM_AR').style.display = 'none';
    document.getElementById('CF_AB_NOMP_FR').style.display = 'none';
    document.getElementById('CF_AB_NOMP_AR').style.display = 'none';
    document.getElementById('CF_AB_NBCPTR_ACTIF').style.display = 'none';
    document.getElementById('CF_AB_MENSUALISE').style.display = 'none';
    document.getElementById('CF_AB_MAXDAT_RLC').style.display = 'none';
    document.getElementById('CF_AB_MATRICULE_FISCAL').style.display = 'none';
    document.getElementById('CF_AB_LOCALITE_FR').style.display = 'none';
    document.getElementById('CF_AB_LOCALITE_AR').style.display = 'none';
    document.getElementById('CF_AB_LOCALITEP_FR').style.display = 'none';
    document.getElementById('CF_AB_LOCALITEP_AR').style.display = 'none';
    document.getElementById('CF_AB_IDUTILISATEUR').style.display = 'none';
    document.getElementById('CF_AB_EXONERE').style.display = 'none';
    document.getElementById('CF_AB_EMAIL').style.display = 'none';
    document.getElementById('CF_AB_DAT_RESILIATION').style.display = 'none';
    document.getElementById('CF_AB_DAT_CREATION').style.display = 'none';
    document.getElementById('CF_AB_DATMAJ').style.display = 'none';
    document.getElementById('CF_AB_CPVERSION').style.display = 'none';
    document.getElementById('CF_AB_CODE_POSTALP').style.display = 'none';
    document.getElementById('CF_AB_CODE_POSTAL').style.display = 'none';
    document.getElementById('CF_AB_CODE').style.display = 'none';
    document.getElementById('CF_AB_CLE_COMPTE').style.display = 'none';
    document.getElementById('CF_AB_CIN').style.display = 'none';
    document.getElementById('CF_AB_ADRESS_FR').style.display = 'none';
    document.getElementById('CF_AB_ADRESS_AR').style.display = 'none';
    document.getElementById('CF_AB_ADRESSP_FR').style.display = 'none';
    document.getElementById('CF_AB_ADRESSP_AR').style.display = 'none';



}

function myFunction30() {
    document.getElementById('RC_PAY_CODE').style.display = 'block';
    document.getElementById('RC_ETAT_CODE').style.display = 'none';
    document.getElementById('RC_COMMUNE_CODE').style.display = 'none';
    document.getElementById('EC_CATEG_CODE').style.display = 'none';
    document.getElementById('RC_BQ_CODBQUE').style.display = 'none';
    document.getElementById('RC_ABCLASS_CODE').style.display = 'none';
    document.getElementById('CF_AB_UF_CODE').style.display = 'none';
    document.getElementById('CF_AB_SOLDE_FINAL').style.display = 'none';
    document.getElementById('CF_AB_SAISONNIER').style.display = 'none';
    document.getElementById('CF_AB_RELANCE').style.display = 'none';
    document.getElementById('CF_AB_REF').style.display = 'none';
    document.getElementById('CF_AB_NUM_COMPTE').style.display = 'none';
    document.getElementById('CF_AB_NUMTEL_MOBILE').style.display = 'none';
    document.getElementById('CF_AB_NUMTEL_FIX').style.display = 'none';
    document.getElementById('CF_AB_NUMFAX').style.display = 'none';
    document.getElementById('CF_').style.display = 'none';
    document.getElementById('AB_NOM_FR').style.display = 'none';
    document.getElementById('CF_AB_NOM_AR').style.display = 'none';
    document.getElementById('CF_AB_NOMP_FR').style.display = 'none';
    document.getElementById('CF_AB_NOMP_AR').style.display = 'none';
    document.getElementById('CF_AB_NBCPTR_ACTIF').style.display = 'none';
    document.getElementById('CF_AB_MENSUALISE').style.display = 'none';
    document.getElementById('CF_AB_MAXDAT_RLC').style.display = 'none';
    document.getElementById('CF_AB_MATRICULE_FISCAL').style.display = 'none';
    document.getElementById('CF_AB_LOCALITE_FR').style.display = 'none';
    document.getElementById('CF_AB_LOCALITE_AR').style.display = 'none';
    document.getElementById('CF_AB_LOCALITEP_FR').style.display = 'none';
    document.getElementById('CF_AB_LOCALITEP_AR').style.display = 'none';
    document.getElementById('CF_AB_IDUTILISATEUR').style.display = 'none';
    document.getElementById('CF_AB_EXONERE').style.display = 'none';
    document.getElementById('CF_AB_EMAIL').style.display = 'none';
    document.getElementById('CF_AB_DAT_RESILIATION').style.display = 'none';
    document.getElementById('CF_AB_DAT_CREATION').style.display = 'none';
    document.getElementById('CF_AB_DATMAJ').style.display = 'none';
    document.getElementById('CF_AB_CPVERSION').style.display = 'none';
    document.getElementById('CF_AB_CODE_POSTALP').style.display = 'none';
    document.getElementById('CF_AB_CODE_POSTAL').style.display = 'none';
    document.getElementById('CF_AB_CODE').style.display = 'none';
    document.getElementById('CF_AB_CLE_COMPTE').style.display = 'none';
    document.getElementById('CF_AB_CIN').style.display = 'none';
    document.getElementById('CF_AB_ADRESS_FR').style.display = 'none';
    document.getElementById('CF_AB_ADRESS_AR').style.display = 'none';
    document.getElementById('CF_AB_ADRESSP_FR').style.display = 'none';
    document.getElementById('CF_AB_ADRESSP_AR').style.display = 'none';



}

function myFunction31() {
    document.getElementById('RC_PAY_CODE').style.display = 'block';
    document.getElementById('RC_ETAT_CODE').style.display = 'none';
    document.getElementById('RC_COMMUNE_CODE').style.display = 'none';
    document.getElementById('EC_CATEG_CODE').style.display = 'none';
    document.getElementById('RC_BQ_CODBQUE').style.display = 'none';
    document.getElementById('RC_ABCLASS_CODE').style.display = 'none';
    document.getElementById('CF_AB_UF_CODE').style.display = 'none';
    document.getElementById('CF_AB_SOLDE_FINAL').style.display = 'none';
    document.getElementById('CF_AB_SAISONNIER').style.display = 'none';
    document.getElementById('CF_AB_RELANCE').style.display = 'none';
    document.getElementById('CF_AB_REF').style.display = 'none';
    document.getElementById('CF_AB_NUM_COMPTE').style.display = 'none';
    document.getElementById('CF_AB_NUMTEL_MOBILE').style.display = 'none';
    document.getElementById('CF_AB_NUMTEL_FIX').style.display = 'none';
    document.getElementById('CF_AB_NUMFAX').style.display = 'none';
    document.getElementById('CF_').style.display = 'none';
    document.getElementById('AB_NOM_FR').style.display = 'none';
    document.getElementById('CF_AB_NOM_AR').style.display = 'none';
    document.getElementById('CF_AB_NOMP_FR').style.display = 'none';
    document.getElementById('CF_AB_NOMP_AR').style.display = 'none';
    document.getElementById('CF_AB_NBCPTR_ACTIF').style.display = 'none';
    document.getElementById('CF_AB_MENSUALISE').style.display = 'none';
    document.getElementById('CF_AB_MAXDAT_RLC').style.display = 'none';
    document.getElementById('CF_AB_MATRICULE_FISCAL').style.display = 'none';
    document.getElementById('CF_AB_LOCALITE_FR').style.display = 'none';
    document.getElementById('CF_AB_LOCALITE_AR').style.display = 'none';
    document.getElementById('CF_AB_LOCALITEP_FR').style.display = 'none';
    document.getElementById('CF_AB_LOCALITEP_AR').style.display = 'none';
    document.getElementById('CF_AB_IDUTILISATEUR').style.display = 'none';
    document.getElementById('CF_AB_EXONERE').style.display = 'none';
    document.getElementById('CF_AB_EMAIL').style.display = 'none';
    document.getElementById('CF_AB_DAT_RESILIATION').style.display = 'none';
    document.getElementById('CF_AB_DAT_CREATION').style.display = 'none';
    document.getElementById('CF_AB_DATMAJ').style.display = 'none';
    document.getElementById('CF_AB_CPVERSION').style.display = 'none';
    document.getElementById('CF_AB_CODE_POSTALP').style.display = 'none';
    document.getElementById('CF_AB_CODE_POSTAL').style.display = 'none';
    document.getElementById('CF_AB_CODE').style.display = 'none';
    document.getElementById('CF_AB_CLE_COMPTE').style.display = 'none';
    document.getElementById('CF_AB_CIN').style.display = 'none';
    document.getElementById('CF_AB_ADRESS_FR').style.display = 'none';
    document.getElementById('CF_AB_ADRESS_AR').style.display = 'none';
    document.getElementById('CF_AB_ADRESSP_FR').style.display = 'none';
    document.getElementById('CF_AB_ADRESSP_AR').style.display = 'none';



}

function myFunction32() {
    document.getElementById('RC_PAY_CODE').style.display = 'block';
    document.getElementById('RC_ETAT_CODE').style.display = 'none';
    document.getElementById('RC_COMMUNE_CODE').style.display = 'none';
    document.getElementById('EC_CATEG_CODE').style.display = 'none';
    document.getElementById('RC_BQ_CODBQUE').style.display = 'none';
    document.getElementById('RC_ABCLASS_CODE').style.display = 'none';
    document.getElementById('CF_AB_UF_CODE').style.display = 'none';
    document.getElementById('CF_AB_SOLDE_FINAL').style.display = 'none';
    document.getElementById('CF_AB_SAISONNIER').style.display = 'none';
    document.getElementById('CF_AB_RELANCE').style.display = 'none';
    document.getElementById('CF_AB_REF').style.display = 'none';
    document.getElementById('CF_AB_NUM_COMPTE').style.display = 'none';
    document.getElementById('CF_AB_NUMTEL_MOBILE').style.display = 'none';
    document.getElementById('CF_AB_NUMTEL_FIX').style.display = 'none';
    document.getElementById('CF_AB_NUMFAX').style.display = 'none';
    document.getElementById('CF_').style.display = 'none';
    document.getElementById('AB_NOM_FR').style.display = 'none';
    document.getElementById('CF_AB_NOM_AR').style.display = 'none';
    document.getElementById('CF_AB_NOMP_FR').style.display = 'none';
    document.getElementById('CF_AB_NOMP_AR').style.display = 'none';
    document.getElementById('CF_AB_NBCPTR_ACTIF').style.display = 'none';
    document.getElementById('CF_AB_MENSUALISE').style.display = 'none';
    document.getElementById('CF_AB_MAXDAT_RLC').style.display = 'none';
    document.getElementById('CF_AB_MATRICULE_FISCAL').style.display = 'none';
    document.getElementById('CF_AB_LOCALITE_FR').style.display = 'none';
    document.getElementById('CF_AB_LOCALITE_AR').style.display = 'none';
    document.getElementById('CF_AB_LOCALITEP_FR').style.display = 'none';
    document.getElementById('CF_AB_LOCALITEP_AR').style.display = 'none';
    document.getElementById('CF_AB_IDUTILISATEUR').style.display = 'none';
    document.getElementById('CF_AB_EXONERE').style.display = 'none';
    document.getElementById('CF_AB_EMAIL').style.display = 'none';
    document.getElementById('CF_AB_DAT_RESILIATION').style.display = 'none';
    document.getElementById('CF_AB_DAT_CREATION').style.display = 'none';
    document.getElementById('CF_AB_DATMAJ').style.display = 'none';
    document.getElementById('CF_AB_CPVERSION').style.display = 'none';
    document.getElementById('CF_AB_CODE_POSTALP').style.display = 'none';
    document.getElementById('CF_AB_CODE_POSTAL').style.display = 'none';
    document.getElementById('CF_AB_CODE').style.display = 'none';
    document.getElementById('CF_AB_CLE_COMPTE').style.display = 'none';
    document.getElementById('CF_AB_CIN').style.display = 'none';
    document.getElementById('CF_AB_ADRESS_FR').style.display = 'none';
    document.getElementById('CF_AB_ADRESS_AR').style.display = 'none';
    document.getElementById('CF_AB_ADRESSP_FR').style.display = 'none';
    document.getElementById('CF_AB_ADRESSP_AR').style.display = 'none';



}

function myFunction33() {
    document.getElementById('RC_PAY_CODE').style.display = 'block';
    document.getElementById('RC_ETAT_CODE').style.display = 'none';
    document.getElementById('RC_COMMUNE_CODE').style.display = 'none';
    document.getElementById('EC_CATEG_CODE').style.display = 'none';
    document.getElementById('RC_BQ_CODBQUE').style.display = 'none';
    document.getElementById('RC_ABCLASS_CODE').style.display = 'none';
    document.getElementById('CF_AB_UF_CODE').style.display = 'none';
    document.getElementById('CF_AB_SOLDE_FINAL').style.display = 'none';
    document.getElementById('CF_AB_SAISONNIER').style.display = 'none';
    document.getElementById('CF_AB_RELANCE').style.display = 'none';
    document.getElementById('CF_AB_REF').style.display = 'none';
    document.getElementById('CF_AB_NUM_COMPTE').style.display = 'none';
    document.getElementById('CF_AB_NUMTEL_MOBILE').style.display = 'none';
    document.getElementById('CF_AB_NUMTEL_FIX').style.display = 'none';
    document.getElementById('CF_AB_NUMFAX').style.display = 'none';
    document.getElementById('CF_').style.display = 'none';
    document.getElementById('AB_NOM_FR').style.display = 'none';
    document.getElementById('CF_AB_NOM_AR').style.display = 'none';
    document.getElementById('CF_AB_NOMP_FR').style.display = 'none';
    document.getElementById('CF_AB_NOMP_AR').style.display = 'none';
    document.getElementById('CF_AB_NBCPTR_ACTIF').style.display = 'none';
    document.getElementById('CF_AB_MENSUALISE').style.display = 'none';
    document.getElementById('CF_AB_MAXDAT_RLC').style.display = 'none';
    document.getElementById('CF_AB_MATRICULE_FISCAL').style.display = 'none';
    document.getElementById('CF_AB_LOCALITE_FR').style.display = 'none';
    document.getElementById('CF_AB_LOCALITE_AR').style.display = 'none';
    document.getElementById('CF_AB_LOCALITEP_FR').style.display = 'none';
    document.getElementById('CF_AB_LOCALITEP_AR').style.display = 'none';
    document.getElementById('CF_AB_IDUTILISATEUR').style.display = 'none';
    document.getElementById('CF_AB_EXONERE').style.display = 'none';
    document.getElementById('CF_AB_EMAIL').style.display = 'none';
    document.getElementById('CF_AB_DAT_RESILIATION').style.display = 'none';
    document.getElementById('CF_AB_DAT_CREATION').style.display = 'none';
    document.getElementById('CF_AB_DATMAJ').style.display = 'none';
    document.getElementById('CF_AB_CPVERSION').style.display = 'none';
    document.getElementById('CF_AB_CODE_POSTALP').style.display = 'none';
    document.getElementById('CF_AB_CODE_POSTAL').style.display = 'none';
    document.getElementById('CF_AB_CODE').style.display = 'none';
    document.getElementById('CF_AB_CLE_COMPTE').style.display = 'none';
    document.getElementById('CF_AB_CIN').style.display = 'none';
    document.getElementById('CF_AB_ADRESS_FR').style.display = 'none';
    document.getElementById('CF_AB_ADRESS_AR').style.display = 'none';
    document.getElementById('CF_AB_ADRESSP_FR').style.display = 'none';
    document.getElementById('CF_AB_ADRESSP_AR').style.display = 'none';



}

function myFunction34() {
    document.getElementById('RC_PAY_CODE').style.display = 'block';
    document.getElementById('RC_ETAT_CODE').style.display = 'none';
    document.getElementById('RC_COMMUNE_CODE').style.display = 'none';
    document.getElementById('EC_CATEG_CODE').style.display = 'none';
    document.getElementById('RC_BQ_CODBQUE').style.display = 'none';
    document.getElementById('RC_ABCLASS_CODE').style.display = 'none';
    document.getElementById('CF_AB_UF_CODE').style.display = 'none';
    document.getElementById('CF_AB_SOLDE_FINAL').style.display = 'none';
    document.getElementById('CF_AB_SAISONNIER').style.display = 'none';
    document.getElementById('CF_AB_RELANCE').style.display = 'none';
    document.getElementById('CF_AB_REF').style.display = 'none';
    document.getElementById('CF_AB_NUM_COMPTE').style.display = 'none';
    document.getElementById('CF_AB_NUMTEL_MOBILE').style.display = 'none';
    document.getElementById('CF_AB_NUMTEL_FIX').style.display = 'none';
    document.getElementById('CF_AB_NUMFAX').style.display = 'none';
    document.getElementById('CF_').style.display = 'none';
    document.getElementById('AB_NOM_FR').style.display = 'none';
    document.getElementById('CF_AB_NOM_AR').style.display = 'none';
    document.getElementById('CF_AB_NOMP_FR').style.display = 'none';
    document.getElementById('CF_AB_NOMP_AR').style.display = 'none';
    document.getElementById('CF_AB_NBCPTR_ACTIF').style.display = 'none';
    document.getElementById('CF_AB_MENSUALISE').style.display = 'none';
    document.getElementById('CF_AB_MAXDAT_RLC').style.display = 'none';
    document.getElementById('CF_AB_MATRICULE_FISCAL').style.display = 'none';
    document.getElementById('CF_AB_LOCALITE_FR').style.display = 'none';
    document.getElementById('CF_AB_LOCALITE_AR').style.display = 'none';
    document.getElementById('CF_AB_LOCALITEP_FR').style.display = 'none';
    document.getElementById('CF_AB_LOCALITEP_AR').style.display = 'none';
    document.getElementById('CF_AB_IDUTILISATEUR').style.display = 'none';
    document.getElementById('CF_AB_EXONERE').style.display = 'none';
    document.getElementById('CF_AB_EMAIL').style.display = 'none';
    document.getElementById('CF_AB_DAT_RESILIATION').style.display = 'none';
    document.getElementById('CF_AB_DAT_CREATION').style.display = 'none';
    document.getElementById('CF_AB_DATMAJ').style.display = 'none';
    document.getElementById('CF_AB_CPVERSION').style.display = 'none';
    document.getElementById('CF_AB_CODE_POSTALP').style.display = 'none';
    document.getElementById('CF_AB_CODE_POSTAL').style.display = 'none';
    document.getElementById('CF_AB_CODE').style.display = 'none';
    document.getElementById('CF_AB_CLE_COMPTE').style.display = 'none';
    document.getElementById('CF_AB_CIN').style.display = 'none';
    document.getElementById('CF_AB_ADRESS_FR').style.display = 'none';
    document.getElementById('CF_AB_ADRESS_AR').style.display = 'none';
    document.getElementById('CF_AB_ADRESSP_FR').style.display = 'none';
    document.getElementById('CF_AB_ADRESSP_AR').style.display = 'none';



}

function myFunction35() {
    document.getElementById('RC_PAY_CODE').style.display = 'block';
    document.getElementById('RC_ETAT_CODE').style.display = 'none';
    document.getElementById('RC_COMMUNE_CODE').style.display = 'none';
    document.getElementById('EC_CATEG_CODE').style.display = 'none';
    document.getElementById('RC_BQ_CODBQUE').style.display = 'none';
    document.getElementById('RC_ABCLASS_CODE').style.display = 'none';
    document.getElementById('CF_AB_UF_CODE').style.display = 'none';
    document.getElementById('CF_AB_SOLDE_FINAL').style.display = 'none';
    document.getElementById('CF_AB_SAISONNIER').style.display = 'none';
    document.getElementById('CF_AB_RELANCE').style.display = 'none';
    document.getElementById('CF_AB_REF').style.display = 'none';
    document.getElementById('CF_AB_NUM_COMPTE').style.display = 'none';
    document.getElementById('CF_AB_NUMTEL_MOBILE').style.display = 'none';
    document.getElementById('CF_AB_NUMTEL_FIX').style.display = 'none';
    document.getElementById('CF_AB_NUMFAX').style.display = 'none';
    document.getElementById('CF_').style.display = 'none';
    document.getElementById('AB_NOM_FR').style.display = 'none';
    document.getElementById('CF_AB_NOM_AR').style.display = 'none';
    document.getElementById('CF_AB_NOMP_FR').style.display = 'none';
    document.getElementById('CF_AB_NOMP_AR').style.display = 'none';
    document.getElementById('CF_AB_NBCPTR_ACTIF').style.display = 'none';
    document.getElementById('CF_AB_MENSUALISE').style.display = 'none';
    document.getElementById('CF_AB_MAXDAT_RLC').style.display = 'none';
    document.getElementById('CF_AB_MATRICULE_FISCAL').style.display = 'none';
    document.getElementById('CF_AB_LOCALITE_FR').style.display = 'none';
    document.getElementById('CF_AB_LOCALITE_AR').style.display = 'none';
    document.getElementById('CF_AB_LOCALITEP_FR').style.display = 'none';
    document.getElementById('CF_AB_LOCALITEP_AR').style.display = 'none';
    document.getElementById('CF_AB_IDUTILISATEUR').style.display = 'none';
    document.getElementById('CF_AB_EXONERE').style.display = 'none';
    document.getElementById('CF_AB_EMAIL').style.display = 'none';
    document.getElementById('CF_AB_DAT_RESILIATION').style.display = 'none';
    document.getElementById('CF_AB_DAT_CREATION').style.display = 'none';
    document.getElementById('CF_AB_DATMAJ').style.display = 'none';
    document.getElementById('CF_AB_CPVERSION').style.display = 'none';
    document.getElementById('CF_AB_CODE_POSTALP').style.display = 'none';
    document.getElementById('CF_AB_CODE_POSTAL').style.display = 'none';
    document.getElementById('CF_AB_CODE').style.display = 'none';
    document.getElementById('CF_AB_CLE_COMPTE').style.display = 'none';
    document.getElementById('CF_AB_CIN').style.display = 'none';
    document.getElementById('CF_AB_ADRESS_FR').style.display = 'none';
    document.getElementById('CF_AB_ADRESS_AR').style.display = 'none';
    document.getElementById('CF_AB_ADRESSP_FR').style.display = 'none';
    document.getElementById('CF_AB_ADRESSP_AR').style.display = 'none';



}

function myFunction36() {
    document.getElementById('RC_PAY_CODE').style.display = 'block';
    document.getElementById('RC_ETAT_CODE').style.display = 'none';
    document.getElementById('RC_COMMUNE_CODE').style.display = 'none';
    document.getElementById('EC_CATEG_CODE').style.display = 'none';
    document.getElementById('RC_BQ_CODBQUE').style.display = 'none';
    document.getElementById('RC_ABCLASS_CODE').style.display = 'none';
    document.getElementById('CF_AB_UF_CODE').style.display = 'none';
    document.getElementById('CF_AB_SOLDE_FINAL').style.display = 'none';
    document.getElementById('CF_AB_SAISONNIER').style.display = 'none';
    document.getElementById('CF_AB_RELANCE').style.display = 'none';
    document.getElementById('CF_AB_REF').style.display = 'none';
    document.getElementById('CF_AB_NUM_COMPTE').style.display = 'none';
    document.getElementById('CF_AB_NUMTEL_MOBILE').style.display = 'none';
    document.getElementById('CF_AB_NUMTEL_FIX').style.display = 'none';
    document.getElementById('CF_AB_NUMFAX').style.display = 'none';
    document.getElementById('CF_').style.display = 'none';
    document.getElementById('AB_NOM_FR').style.display = 'none';
    document.getElementById('CF_AB_NOM_AR').style.display = 'none';
    document.getElementById('CF_AB_NOMP_FR').style.display = 'none';
    document.getElementById('CF_AB_NOMP_AR').style.display = 'none';
    document.getElementById('CF_AB_NBCPTR_ACTIF').style.display = 'none';
    document.getElementById('CF_AB_MENSUALISE').style.display = 'none';
    document.getElementById('CF_AB_MAXDAT_RLC').style.display = 'none';
    document.getElementById('CF_AB_MATRICULE_FISCAL').style.display = 'none';
    document.getElementById('CF_AB_LOCALITE_FR').style.display = 'none';
    document.getElementById('CF_AB_LOCALITE_AR').style.display = 'none';
    document.getElementById('CF_AB_LOCALITEP_FR').style.display = 'none';
    document.getElementById('CF_AB_LOCALITEP_AR').style.display = 'none';
    document.getElementById('CF_AB_IDUTILISATEUR').style.display = 'none';
    document.getElementById('CF_AB_EXONERE').style.display = 'none';
    document.getElementById('CF_AB_EMAIL').style.display = 'none';
    document.getElementById('CF_AB_DAT_RESILIATION').style.display = 'none';
    document.getElementById('CF_AB_DAT_CREATION').style.display = 'none';
    document.getElementById('CF_AB_DATMAJ').style.display = 'none';
    document.getElementById('CF_AB_CPVERSION').style.display = 'none';
    document.getElementById('CF_AB_CODE_POSTALP').style.display = 'none';
    document.getElementById('CF_AB_CODE_POSTAL').style.display = 'none';
    document.getElementById('CF_AB_CODE').style.display = 'none';
    document.getElementById('CF_AB_CLE_COMPTE').style.display = 'none';
    document.getElementById('CF_AB_CIN').style.display = 'none';
    document.getElementById('CF_AB_ADRESS_FR').style.display = 'none';
    document.getElementById('CF_AB_ADRESS_AR').style.display = 'none';
    document.getElementById('CF_AB_ADRESSP_FR').style.display = 'none';
    document.getElementById('CF_AB_ADRESSP_AR').style.display = 'none';



}

function myFunction37() {
    document.getElementById('RC_PAY_CODE').style.display = 'block';
    document.getElementById('RC_ETAT_CODE').style.display = 'none';
    document.getElementById('RC_COMMUNE_CODE').style.display = 'none';
    document.getElementById('EC_CATEG_CODE').style.display = 'none';
    document.getElementById('RC_BQ_CODBQUE').style.display = 'none';
    document.getElementById('RC_ABCLASS_CODE').style.display = 'none';
    document.getElementById('CF_AB_UF_CODE').style.display = 'none';
    document.getElementById('CF_AB_SOLDE_FINAL').style.display = 'none';
    document.getElementById('CF_AB_SAISONNIER').style.display = 'none';
    document.getElementById('CF_AB_RELANCE').style.display = 'none';
    document.getElementById('CF_AB_REF').style.display = 'none';
    document.getElementById('CF_AB_NUM_COMPTE').style.display = 'none';
    document.getElementById('CF_AB_NUMTEL_MOBILE').style.display = 'none';
    document.getElementById('CF_AB_NUMTEL_FIX').style.display = 'none';
    document.getElementById('CF_AB_NUMFAX').style.display = 'none';
    document.getElementById('CF_').style.display = 'none';
    document.getElementById('AB_NOM_FR').style.display = 'none';
    document.getElementById('CF_AB_NOM_AR').style.display = 'none';
    document.getElementById('CF_AB_NOMP_FR').style.display = 'none';
    document.getElementById('CF_AB_NOMP_AR').style.display = 'none';
    document.getElementById('CF_AB_NBCPTR_ACTIF').style.display = 'none';
    document.getElementById('CF_AB_MENSUALISE').style.display = 'none';
    document.getElementById('CF_AB_MAXDAT_RLC').style.display = 'none';
    document.getElementById('CF_AB_MATRICULE_FISCAL').style.display = 'none';
    document.getElementById('CF_AB_LOCALITE_FR').style.display = 'none';
    document.getElementById('CF_AB_LOCALITE_AR').style.display = 'none';
    document.getElementById('CF_AB_LOCALITEP_FR').style.display = 'none';
    document.getElementById('CF_AB_LOCALITEP_AR').style.display = 'none';
    document.getElementById('CF_AB_IDUTILISATEUR').style.display = 'none';
    document.getElementById('CF_AB_EXONERE').style.display = 'none';
    document.getElementById('CF_AB_EMAIL').style.display = 'none';
    document.getElementById('CF_AB_DAT_RESILIATION').style.display = 'none';
    document.getElementById('CF_AB_DAT_CREATION').style.display = 'none';
    document.getElementById('CF_AB_DATMAJ').style.display = 'none';
    document.getElementById('CF_AB_CPVERSION').style.display = 'none';
    document.getElementById('CF_AB_CODE_POSTALP').style.display = 'none';
    document.getElementById('CF_AB_CODE_POSTAL').style.display = 'none';
    document.getElementById('CF_AB_CODE').style.display = 'none';
    document.getElementById('CF_AB_CLE_COMPTE').style.display = 'none';
    document.getElementById('CF_AB_CIN').style.display = 'none';
    document.getElementById('CF_AB_ADRESS_FR').style.display = 'none';
    document.getElementById('CF_AB_ADRESS_AR').style.display = 'none';
    document.getElementById('CF_AB_ADRESSP_FR').style.display = 'none';
    document.getElementById('CF_AB_ADRESSP_AR').style.display = 'none';



}

function myFunction38() {
    document.getElementById('RC_PAY_CODE').style.display = 'block';
    document.getElementById('RC_ETAT_CODE').style.display = 'none';
    document.getElementById('RC_COMMUNE_CODE').style.display = 'none';
    document.getElementById('EC_CATEG_CODE').style.display = 'none';
    document.getElementById('RC_BQ_CODBQUE').style.display = 'none';
    document.getElementById('RC_ABCLASS_CODE').style.display = 'none';
    document.getElementById('CF_AB_UF_CODE').style.display = 'none';
    document.getElementById('CF_AB_SOLDE_FINAL').style.display = 'none';
    document.getElementById('CF_AB_SAISONNIER').style.display = 'none';
    document.getElementById('CF_AB_RELANCE').style.display = 'none';
    document.getElementById('CF_AB_REF').style.display = 'none';
    document.getElementById('CF_AB_NUM_COMPTE').style.display = 'none';
    document.getElementById('CF_AB_NUMTEL_MOBILE').style.display = 'none';
    document.getElementById('CF_AB_NUMTEL_FIX').style.display = 'none';
    document.getElementById('CF_AB_NUMFAX').style.display = 'none';
    document.getElementById('CF_').style.display = 'none';
    document.getElementById('AB_NOM_FR').style.display = 'none';
    document.getElementById('CF_AB_NOM_AR').style.display = 'none';
    document.getElementById('CF_AB_NOMP_FR').style.display = 'none';
    document.getElementById('CF_AB_NOMP_AR').style.display = 'none';
    document.getElementById('CF_AB_NBCPTR_ACTIF').style.display = 'none';
    document.getElementById('CF_AB_MENSUALISE').style.display = 'none';
    document.getElementById('CF_AB_MAXDAT_RLC').style.display = 'none';
    document.getElementById('CF_AB_MATRICULE_FISCAL').style.display = 'none';
    document.getElementById('CF_AB_LOCALITE_FR').style.display = 'none';
    document.getElementById('CF_AB_LOCALITE_AR').style.display = 'none';
    document.getElementById('CF_AB_LOCALITEP_FR').style.display = 'none';
    document.getElementById('CF_AB_LOCALITEP_AR').style.display = 'none';
    document.getElementById('CF_AB_IDUTILISATEUR').style.display = 'none';
    document.getElementById('CF_AB_EXONERE').style.display = 'none';
    document.getElementById('CF_AB_EMAIL').style.display = 'none';
    document.getElementById('CF_AB_DAT_RESILIATION').style.display = 'none';
    document.getElementById('CF_AB_DAT_CREATION').style.display = 'none';
    document.getElementById('CF_AB_DATMAJ').style.display = 'none';
    document.getElementById('CF_AB_CPVERSION').style.display = 'none';
    document.getElementById('CF_AB_CODE_POSTALP').style.display = 'none';
    document.getElementById('CF_AB_CODE_POSTAL').style.display = 'none';
    document.getElementById('CF_AB_CODE').style.display = 'none';
    document.getElementById('CF_AB_CLE_COMPTE').style.display = 'none';
    document.getElementById('CF_AB_CIN').style.display = 'none';
    document.getElementById('CF_AB_ADRESS_FR').style.display = 'none';
    document.getElementById('CF_AB_ADRESS_AR').style.display = 'none';
    document.getElementById('CF_AB_ADRESSP_FR').style.display = 'none';
    document.getElementById('CF_AB_ADRESSP_AR').style.display = 'none';



}

function myFunction39() {
    document.getElementById('RC_PAY_CODE').style.display = 'block';
    document.getElementById('RC_ETAT_CODE').style.display = 'none';
    document.getElementById('RC_COMMUNE_CODE').style.display = 'none';
    document.getElementById('EC_CATEG_CODE').style.display = 'none';
    document.getElementById('RC_BQ_CODBQUE').style.display = 'none';
    document.getElementById('RC_ABCLASS_CODE').style.display = 'none';
    document.getElementById('CF_AB_UF_CODE').style.display = 'none';
    document.getElementById('CF_AB_SOLDE_FINAL').style.display = 'none';
    document.getElementById('CF_AB_SAISONNIER').style.display = 'none';
    document.getElementById('CF_AB_RELANCE').style.display = 'none';
    document.getElementById('CF_AB_REF').style.display = 'none';
    document.getElementById('CF_AB_NUM_COMPTE').style.display = 'none';
    document.getElementById('CF_AB_NUMTEL_MOBILE').style.display = 'none';
    document.getElementById('CF_AB_NUMTEL_FIX').style.display = 'none';
    document.getElementById('CF_AB_NUMFAX').style.display = 'none';
    document.getElementById('CF_').style.display = 'none';
    document.getElementById('AB_NOM_FR').style.display = 'none';
    document.getElementById('CF_AB_NOM_AR').style.display = 'none';
    document.getElementById('CF_AB_NOMP_FR').style.display = 'none';
    document.getElementById('CF_AB_NOMP_AR').style.display = 'none';
    document.getElementById('CF_AB_NBCPTR_ACTIF').style.display = 'none';
    document.getElementById('CF_AB_MENSUALISE').style.display = 'none';
    document.getElementById('CF_AB_MAXDAT_RLC').style.display = 'none';
    document.getElementById('CF_AB_MATRICULE_FISCAL').style.display = 'none';
    document.getElementById('CF_AB_LOCALITE_FR').style.display = 'none';
    document.getElementById('CF_AB_LOCALITE_AR').style.display = 'none';
    document.getElementById('CF_AB_LOCALITEP_FR').style.display = 'none';
    document.getElementById('CF_AB_LOCALITEP_AR').style.display = 'none';
    document.getElementById('CF_AB_IDUTILISATEUR').style.display = 'none';
    document.getElementById('CF_AB_EXONERE').style.display = 'none';
    document.getElementById('CF_AB_EMAIL').style.display = 'none';
    document.getElementById('CF_AB_DAT_RESILIATION').style.display = 'none';
    document.getElementById('CF_AB_DAT_CREATION').style.display = 'none';
    document.getElementById('CF_AB_DATMAJ').style.display = 'none';
    document.getElementById('CF_AB_CPVERSION').style.display = 'none';
    document.getElementById('CF_AB_CODE_POSTALP').style.display = 'none';
    document.getElementById('CF_AB_CODE_POSTAL').style.display = 'none';
    document.getElementById('CF_AB_CODE').style.display = 'none';
    document.getElementById('CF_AB_CLE_COMPTE').style.display = 'none';
    document.getElementById('CF_AB_CIN').style.display = 'none';
    document.getElementById('CF_AB_ADRESS_FR').style.display = 'none';
    document.getElementById('CF_AB_ADRESS_AR').style.display = 'none';
    document.getElementById('CF_AB_ADRESSP_FR').style.display = 'none';
    document.getElementById('CF_AB_ADRESSP_AR').style.display = 'none';



}

function myFunction40() {
    document.getElementById('RC_PAY_CODE').style.display = 'block';
    document.getElementById('RC_ETAT_CODE').style.display = 'none';
    document.getElementById('RC_COMMUNE_CODE').style.display = 'none';
    document.getElementById('EC_CATEG_CODE').style.display = 'none';
    document.getElementById('RC_BQ_CODBQUE').style.display = 'none';
    document.getElementById('RC_ABCLASS_CODE').style.display = 'none';
    document.getElementById('CF_AB_UF_CODE').style.display = 'none';
    document.getElementById('CF_AB_SOLDE_FINAL').style.display = 'none';
    document.getElementById('CF_AB_SAISONNIER').style.display = 'none';
    document.getElementById('CF_AB_RELANCE').style.display = 'none';
    document.getElementById('CF_AB_REF').style.display = 'none';
    document.getElementById('CF_AB_NUM_COMPTE').style.display = 'none';
    document.getElementById('CF_AB_NUMTEL_MOBILE').style.display = 'none';
    document.getElementById('CF_AB_NUMTEL_FIX').style.display = 'none';
    document.getElementById('CF_AB_NUMFAX').style.display = 'none';
    document.getElementById('CF_').style.display = 'none';
    document.getElementById('AB_NOM_FR').style.display = 'none';
    document.getElementById('CF_AB_NOM_AR').style.display = 'none';
    document.getElementById('CF_AB_NOMP_FR').style.display = 'none';
    document.getElementById('CF_AB_NOMP_AR').style.display = 'none';
    document.getElementById('CF_AB_NBCPTR_ACTIF').style.display = 'none';
    document.getElementById('CF_AB_MENSUALISE').style.display = 'none';
    document.getElementById('CF_AB_MAXDAT_RLC').style.display = 'none';
    document.getElementById('CF_AB_MATRICULE_FISCAL').style.display = 'none';
    document.getElementById('CF_AB_LOCALITE_FR').style.display = 'none';
    document.getElementById('CF_AB_LOCALITE_AR').style.display = 'none';
    document.getElementById('CF_AB_LOCALITEP_FR').style.display = 'none';
    document.getElementById('CF_AB_LOCALITEP_AR').style.display = 'none';
    document.getElementById('CF_AB_IDUTILISATEUR').style.display = 'none';
    document.getElementById('CF_AB_EXONERE').style.display = 'none';
    document.getElementById('CF_AB_EMAIL').style.display = 'none';
    document.getElementById('CF_AB_DAT_RESILIATION').style.display = 'none';
    document.getElementById('CF_AB_DAT_CREATION').style.display = 'none';
    document.getElementById('CF_AB_DATMAJ').style.display = 'none';
    document.getElementById('CF_AB_CPVERSION').style.display = 'none';
    document.getElementById('CF_AB_CODE_POSTALP').style.display = 'none';
    document.getElementById('CF_AB_CODE_POSTAL').style.display = 'none';
    document.getElementById('CF_AB_CODE').style.display = 'none';
    document.getElementById('CF_AB_CLE_COMPTE').style.display = 'none';
    document.getElementById('CF_AB_CIN').style.display = 'none';
    document.getElementById('CF_AB_ADRESS_FR').style.display = 'none';
    document.getElementById('CF_AB_ADRESS_AR').style.display = 'none';
    document.getElementById('CF_AB_ADRESSP_FR').style.display = 'none';
    document.getElementById('CF_AB_ADRESSP_AR').style.display = 'none';



}

function myFunction41() {
    document.getElementById('RC_PAY_CODE').style.display = 'block';
    document.getElementById('RC_ETAT_CODE').style.display = 'none';
    document.getElementById('RC_COMMUNE_CODE').style.display = 'none';
    document.getElementById('EC_CATEG_CODE').style.display = 'none';
    document.getElementById('RC_BQ_CODBQUE').style.display = 'none';
    document.getElementById('RC_ABCLASS_CODE').style.display = 'none';
    document.getElementById('CF_AB_UF_CODE').style.display = 'none';
    document.getElementById('CF_AB_SOLDE_FINAL').style.display = 'none';
    document.getElementById('CF_AB_SAISONNIER').style.display = 'none';
    document.getElementById('CF_AB_RELANCE').style.display = 'none';
    document.getElementById('CF_AB_REF').style.display = 'none';
    document.getElementById('CF_AB_NUM_COMPTE').style.display = 'none';
    document.getElementById('CF_AB_NUMTEL_MOBILE').style.display = 'none';
    document.getElementById('CF_AB_NUMTEL_FIX').style.display = 'none';
    document.getElementById('CF_AB_NUMFAX').style.display = 'none';
    document.getElementById('CF_').style.display = 'none';
    document.getElementById('AB_NOM_FR').style.display = 'none';
    document.getElementById('CF_AB_NOM_AR').style.display = 'none';
    document.getElementById('CF_AB_NOMP_FR').style.display = 'none';
    document.getElementById('CF_AB_NOMP_AR').style.display = 'none';
    document.getElementById('CF_AB_NBCPTR_ACTIF').style.display = 'none';
    document.getElementById('CF_AB_MENSUALISE').style.display = 'none';
    document.getElementById('CF_AB_MAXDAT_RLC').style.display = 'none';
    document.getElementById('CF_AB_MATRICULE_FISCAL').style.display = 'none';
    document.getElementById('CF_AB_LOCALITE_FR').style.display = 'none';
    document.getElementById('CF_AB_LOCALITE_AR').style.display = 'none';
    document.getElementById('CF_AB_LOCALITEP_FR').style.display = 'none';
    document.getElementById('CF_AB_LOCALITEP_AR').style.display = 'none';
    document.getElementById('CF_AB_IDUTILISATEUR').style.display = 'none';
    document.getElementById('CF_AB_EXONERE').style.display = 'none';
    document.getElementById('CF_AB_EMAIL').style.display = 'none';
    document.getElementById('CF_AB_DAT_RESILIATION').style.display = 'none';
    document.getElementById('CF_AB_DAT_CREATION').style.display = 'none';
    document.getElementById('CF_AB_DATMAJ').style.display = 'none';
    document.getElementById('CF_AB_CPVERSION').style.display = 'none';
    document.getElementById('CF_AB_CODE_POSTALP').style.display = 'none';
    document.getElementById('CF_AB_CODE_POSTAL').style.display = 'none';
    document.getElementById('CF_AB_CODE').style.display = 'none';
    document.getElementById('CF_AB_CLE_COMPTE').style.display = 'none';
    document.getElementById('CF_AB_CIN').style.display = 'none';
    document.getElementById('CF_AB_ADRESS_FR').style.display = 'none';
    document.getElementById('CF_AB_ADRESS_AR').style.display = 'none';
    document.getElementById('CF_AB_ADRESSP_FR').style.display = 'none';
    document.getElementById('CF_AB_ADRESSP_AR').style.display = 'none';



}

function myFunction42() {
    document.getElementById('RC_PAY_CODE').style.display = 'block';
    document.getElementById('RC_ETAT_CODE').style.display = 'none';
    document.getElementById('RC_COMMUNE_CODE').style.display = 'none';
    document.getElementById('EC_CATEG_CODE').style.display = 'none';
    document.getElementById('RC_BQ_CODBQUE').style.display = 'none';
    document.getElementById('RC_ABCLASS_CODE').style.display = 'none';
    document.getElementById('CF_AB_UF_CODE').style.display = 'none';
    document.getElementById('CF_AB_SOLDE_FINAL').style.display = 'none';
    document.getElementById('CF_AB_SAISONNIER').style.display = 'none';
    document.getElementById('CF_AB_RELANCE').style.display = 'none';
    document.getElementById('CF_AB_REF').style.display = 'none';
    document.getElementById('CF_AB_NUM_COMPTE').style.display = 'none';
    document.getElementById('CF_AB_NUMTEL_MOBILE').style.display = 'none';
    document.getElementById('CF_AB_NUMTEL_FIX').style.display = 'none';
    document.getElementById('CF_AB_NUMFAX').style.display = 'none';
    document.getElementById('CF_').style.display = 'none';
    document.getElementById('AB_NOM_FR').style.display = 'none';
    document.getElementById('CF_AB_NOM_AR').style.display = 'none';
    document.getElementById('CF_AB_NOMP_FR').style.display = 'none';
    document.getElementById('CF_AB_NOMP_AR').style.display = 'none';
    document.getElementById('CF_AB_NBCPTR_ACTIF').style.display = 'none';
    document.getElementById('CF_AB_MENSUALISE').style.display = 'none';
    document.getElementById('CF_AB_MAXDAT_RLC').style.display = 'none';
    document.getElementById('CF_AB_MATRICULE_FISCAL').style.display = 'none';
    document.getElementById('CF_AB_LOCALITE_FR').style.display = 'none';
    document.getElementById('CF_AB_LOCALITE_AR').style.display = 'none';
    document.getElementById('CF_AB_LOCALITEP_FR').style.display = 'none';
    document.getElementById('CF_AB_LOCALITEP_AR').style.display = 'none';
    document.getElementById('CF_AB_IDUTILISATEUR').style.display = 'none';
    document.getElementById('CF_AB_EXONERE').style.display = 'none';
    document.getElementById('CF_AB_EMAIL').style.display = 'none';
    document.getElementById('CF_AB_DAT_RESILIATION').style.display = 'none';
    document.getElementById('CF_AB_DAT_CREATION').style.display = 'none';
    document.getElementById('CF_AB_DATMAJ').style.display = 'none';
    document.getElementById('CF_AB_CPVERSION').style.display = 'none';
    document.getElementById('CF_AB_CODE_POSTALP').style.display = 'none';
    document.getElementById('CF_AB_CODE_POSTAL').style.display = 'none';
    document.getElementById('CF_AB_CODE').style.display = 'none';
    document.getElementById('CF_AB_CLE_COMPTE').style.display = 'none';
    document.getElementById('CF_AB_CIN').style.display = 'none';
    document.getElementById('CF_AB_ADRESS_FR').style.display = 'none';
    document.getElementById('CF_AB_ADRESS_AR').style.display = 'none';
    document.getElementById('CF_AB_ADRESSP_FR').style.display = 'none';
    document.getElementById('CF_AB_ADRESSP_AR').style.display = 'none';



}

function myFunction43() {
    document.getElementById('RC_PAY_CODE').style.display = 'block';
    document.getElementById('RC_ETAT_CODE').style.display = 'none';
    document.getElementById('RC_COMMUNE_CODE').style.display = 'none';
    document.getElementById('EC_CATEG_CODE').style.display = 'none';
    document.getElementById('RC_BQ_CODBQUE').style.display = 'none';
    document.getElementById('RC_ABCLASS_CODE').style.display = 'none';
    document.getElementById('CF_AB_UF_CODE').style.display = 'none';
    document.getElementById('CF_AB_SOLDE_FINAL').style.display = 'none';
    document.getElementById('CF_AB_SAISONNIER').style.display = 'none';
    document.getElementById('CF_AB_RELANCE').style.display = 'none';
    document.getElementById('CF_AB_REF').style.display = 'none';
    document.getElementById('CF_AB_NUM_COMPTE').style.display = 'none';
    document.getElementById('CF_AB_NUMTEL_MOBILE').style.display = 'none';
    document.getElementById('CF_AB_NUMTEL_FIX').style.display = 'none';
    document.getElementById('CF_AB_NUMFAX').style.display = 'none';
    document.getElementById('CF_').style.display = 'none';
    document.getElementById('AB_NOM_FR').style.display = 'none';
    document.getElementById('CF_AB_NOM_AR').style.display = 'none';
    document.getElementById('CF_AB_NOMP_FR').style.display = 'none';
    document.getElementById('CF_AB_NOMP_AR').style.display = 'none';
    document.getElementById('CF_AB_NBCPTR_ACTIF').style.display = 'none';
    document.getElementById('CF_AB_MENSUALISE').style.display = 'none';
    document.getElementById('CF_AB_MAXDAT_RLC').style.display = 'none';
    document.getElementById('CF_AB_MATRICULE_FISCAL').style.display = 'none';
    document.getElementById('CF_AB_LOCALITE_FR').style.display = 'none';
    document.getElementById('CF_AB_LOCALITE_AR').style.display = 'none';
    document.getElementById('CF_AB_LOCALITEP_FR').style.display = 'none';
    document.getElementById('CF_AB_LOCALITEP_AR').style.display = 'none';
    document.getElementById('CF_AB_IDUTILISATEUR').style.display = 'none';
    document.getElementById('CF_AB_EXONERE').style.display = 'none';
    document.getElementById('CF_AB_EMAIL').style.display = 'none';
    document.getElementById('CF_AB_DAT_RESILIATION').style.display = 'none';
    document.getElementById('CF_AB_DAT_CREATION').style.display = 'none';
    document.getElementById('CF_AB_DATMAJ').style.display = 'none';
    document.getElementById('CF_AB_CPVERSION').style.display = 'none';
    document.getElementById('CF_AB_CODE_POSTALP').style.display = 'none';
    document.getElementById('CF_AB_CODE_POSTAL').style.display = 'none';
    document.getElementById('CF_AB_CODE').style.display = 'none';
    document.getElementById('CF_AB_CLE_COMPTE').style.display = 'none';
    document.getElementById('CF_AB_CIN').style.display = 'none';
    document.getElementById('CF_AB_ADRESS_FR').style.display = 'none';
    document.getElementById('CF_AB_ADRESS_AR').style.display = 'none';
    document.getElementById('CF_AB_ADRESSP_FR').style.display = 'none';
    document.getElementById('CF_AB_ADRESSP_AR').style.display = 'none';



}

function myFunction44() {
    document.getElementById('RC_PAY_CODE').style.display = 'block';
    document.getElementById('RC_ETAT_CODE').style.display = 'none';
    document.getElementById('RC_COMMUNE_CODE').style.display = 'none';
    document.getElementById('EC_CATEG_CODE').style.display = 'none';
    document.getElementById('RC_BQ_CODBQUE').style.display = 'none';
    document.getElementById('RC_ABCLASS_CODE').style.display = 'none';
    document.getElementById('CF_AB_UF_CODE').style.display = 'none';
    document.getElementById('CF_AB_SOLDE_FINAL').style.display = 'none';
    document.getElementById('CF_AB_SAISONNIER').style.display = 'none';
    document.getElementById('CF_AB_RELANCE').style.display = 'none';
    document.getElementById('CF_AB_REF').style.display = 'none';
    document.getElementById('CF_AB_NUM_COMPTE').style.display = 'none';
    document.getElementById('CF_AB_NUMTEL_MOBILE').style.display = 'none';
    document.getElementById('CF_AB_NUMTEL_FIX').style.display = 'none';
    document.getElementById('CF_AB_NUMFAX').style.display = 'none';
    document.getElementById('CF_').style.display = 'none';
    document.getElementById('AB_NOM_FR').style.display = 'none';
    document.getElementById('CF_AB_NOM_AR').style.display = 'none';
    document.getElementById('CF_AB_NOMP_FR').style.display = 'none';
    document.getElementById('CF_AB_NOMP_AR').style.display = 'none';
    document.getElementById('CF_AB_NBCPTR_ACTIF').style.display = 'none';
    document.getElementById('CF_AB_MENSUALISE').style.display = 'none';
    document.getElementById('CF_AB_MAXDAT_RLC').style.display = 'none';
    document.getElementById('CF_AB_MATRICULE_FISCAL').style.display = 'none';
    document.getElementById('CF_AB_LOCALITE_FR').style.display = 'none';
    document.getElementById('CF_AB_LOCALITE_AR').style.display = 'none';
    document.getElementById('CF_AB_LOCALITEP_FR').style.display = 'none';
    document.getElementById('CF_AB_LOCALITEP_AR').style.display = 'none';
    document.getElementById('CF_AB_IDUTILISATEUR').style.display = 'none';
    document.getElementById('CF_AB_EXONERE').style.display = 'none';
    document.getElementById('CF_AB_EMAIL').style.display = 'none';
    document.getElementById('CF_AB_DAT_RESILIATION').style.display = 'none';
    document.getElementById('CF_AB_DAT_CREATION').style.display = 'none';
    document.getElementById('CF_AB_DATMAJ').style.display = 'none';
    document.getElementById('CF_AB_CPVERSION').style.display = 'none';
    document.getElementById('CF_AB_CODE_POSTALP').style.display = 'none';
    document.getElementById('CF_AB_CODE_POSTAL').style.display = 'none';
    document.getElementById('CF_AB_CODE').style.display = 'none';
    document.getElementById('CF_AB_CLE_COMPTE').style.display = 'none';
    document.getElementById('CF_AB_CIN').style.display = 'none';
    document.getElementById('CF_AB_ADRESS_FR').style.display = 'none';
    document.getElementById('CF_AB_ADRESS_AR').style.display = 'none';
    document.getElementById('CF_AB_ADRESSP_FR').style.display = 'none';
    document.getElementById('CF_AB_ADRESSP_AR').style.display = 'none';
}
</script>
<script>
function myFunction45() {
    document.getElementById('BT_RELV_UF_CODE').style.display = 'block';
    document.getElementById('BT_RELV_NOM_PRENOM_FR').style.display = 'none';
    document.getElementById('BT_RELV_NOM_PRENOM_AR').style.display = 'none';
    document.getElementById('BT_RELV_MATRICULE').style.display = 'none';
    document.getElementById('BT_RELV_MATCLE').style.display = 'none';
    document.getElementById('BT_RELV_IDUTILISATEUR').style.display = 'none';
}

function myFunction46() {
    document.getElementById('BT_RELV_UF_CODE').style.display = 'none';
    document.getElementById('BT_RELV_NOM_PRENOM_FR').style.display = 'block';
    document.getElementById('BT_RELV_NOM_PRENOM_AR').style.display = 'none';
    document.getElementById('BT_RELV_MATRICULE').style.display = 'none';
    document.getElementById('BT_RELV_MATCLE').style.display = 'none';
    document.getElementById('BT_RELV_IDUTILISATEUR').style.display = 'none';
}

function myFunction47() {
    document.getElementById('BT_RELV_UF_CODE').style.display = 'none';
    document.getElementById('BT_RELV_NOM_PRENOM_FR').style.display = 'none';
    document.getElementById('BT_RELV_NOM_PRENOM_AR').style.display = 'block';
    document.getElementById('BT_RELV_MATRICULE').style.display = 'none';
    document.getElementById('BT_RELV_MATCLE').style.display = 'none';
    document.getElementById('BT_RELV_IDUTILISATEUR').style.display = 'none';
}

function myFunction48() {
    document.getElementById('BT_RELV_UF_CODE').style.display = 'none';
    document.getElementById('BT_RELV_NOM_PRENOM_FR').style.display = 'none';
    document.getElementById('BT_RELV_NOM_PRENOM_AR').style.display = 'none';
    document.getElementById('BT_RELV_MATRICULE').style.display = 'block';
    document.getElementById('BT_RELV_MATCLE').style.display = 'none';
    document.getElementById('BT_RELV_IDUTILISATEUR').style.display = 'none';
}

function myFunction49() {
    document.getElementById('BT_RELV_UF_CODE').style.display = 'none';
    document.getElementById('BT_RELV_NOM_PRENOM_FR').style.display = 'none';
    document.getElementById('BT_RELV_NOM_PRENOM_AR').style.display = 'none';
    document.getElementById('BT_RELV_MATRICULE').style.display = 'none';
    document.getElementById('BT_RELV_MATCLE').style.display = 'block';
    document.getElementById('BT_RELV_IDUTILISATEUR').style.display = 'none';
}

function myFunction50() {
    document.getElementById('BT_RELV_UF_CODE').style.display = 'none';
    document.getElementById('BT_RELV_NOM_PRENOM_FR').style.display = 'none';
    document.getElementById('BT_RELV_NOM_PRENOM_AR').style.display = 'none';
    document.getElementById('BT_RELV_MATRICULE').style.display = 'none';
    document.getElementById('BT_RELV_MATCLE').style.display = 'none';
    document.getElementById('BT_RELV_IDUTILISATEUR').style.display = 'block';
}
</script>
<script>
function myFunction51() {
    document.getElementById('CF_INS_CIN').style.display = 'block';
    document.getElementById('CF_INS_CODE_POSTAL').style.display = 'none';
    document.getElementById('CF_INS_EMAIL').style.display = 'none';
    document.getElementById('CF_INS_GSM').style.display = 'none';
    document.getElementById('CF_INS_EMAIL').style.display = 'none';
    document.getElementById('CF_INS_LOCALITE').style.display = 'none';
    document.getElementById('CF_INS_NOM').style.display = 'none';

}

function myFunction52() {
    document.getElementById('CF_INS_CIN').style.display = 'none';
    document.getElementById('CF_INS_CODE_POSTAL').style.display = 'block';
    document.getElementById('CF_INS_EMAIL').style.display = 'none';
    document.getElementById('CF_INS_GSM').style.display = 'none';
    document.getElementById('CF_INS_EMAIL').style.display = 'none';
    document.getElementById('CF_INS_LOCALITE').style.display = 'none';
    document.getElementById('CF_INS_NOM').style.display = 'none';
}

function myFunction53() {
    document.getElementById('CF_INS_CIN').style.display = 'none';
    document.getElementById('CF_INS_CODE_POSTAL').style.display = 'none';
    document.getElementById('CF_INS_EMAIL').style.display = 'block';
    document.getElementById('CF_INS_GSM').style.display = 'none';
    document.getElementById('CF_INS_EMAIL').style.display = 'none';
    document.getElementById('CF_INS_LOCALITE').style.display = 'none';
    document.getElementById('CF_INS_NOM').style.display = 'none';
}

function myFunction54() {
    document.getElementById('CF_INS_CIN').style.display = 'none';
    document.getElementById('CF_INS_CODE_POSTAL').style.display = 'none';
    document.getElementById('CF_INS_EMAIL').style.display = 'none';
    document.getElementById('CF_INS_GSM').style.display = 'block';
    document.getElementById('CF_INS_EMAIL').style.display = 'none';
    document.getElementById('CF_INS_LOCALITE').style.display = 'none';
    document.getElementById('CF_INS_NOM').style.display = 'none';
}

function myFunction55() {
    document.getElementById('CF_INS_CIN').style.display = 'none';
    document.getElementById('CF_INS_CODE_POSTAL').style.display = 'none';
    document.getElementById('CF_INS_EMAIL').style.display = 'none';
    document.getElementById('CF_INS_GSM').style.display = 'none';
    document.getElementById('CF_INS_EMAIL').style.display = 'block';
    document.getElementById('CF_INS_LOCALITE').style.display = 'none';
    document.getElementById('CF_INS_NOM').style.display = 'none';
}

function myFunction56() {
    document.getElementById('CF_INS_CIN').style.display = 'none';
    document.getElementById('CF_INS_CODE_POSTAL').style.display = 'none';
    document.getElementById('CF_INS_EMAIL').style.display = 'none';
    document.getElementById('CF_INS_GSM').style.display = 'none';
    document.getElementById('CF_INS_EMAIL').style.display = 'none';
    document.getElementById('CF_INS_LOCALITE').style.display = 'block';
    document.getElementById('CF_INS_NOM').style.display = 'none';
}

function myFunction57() {
    document.getElementById('CF_INS_CIN').style.display = 'none';
    document.getElementById('CF_INS_CODE_POSTAL').style.display = 'none';
    document.getElementById('CF_INS_EMAIL').style.display = 'none';
    document.getElementById('CF_INS_GSM').style.display = 'none';
    document.getElementById('CF_INS_EMAIL').style.display = 'none';
    document.getElementById('CF_INS_LOCALITE').style.display = 'none';
    document.getElementById('CF_INS_NOM').style.display = 'block';
}
</script>

</html>