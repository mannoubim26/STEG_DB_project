<form style="margin-top: 4cm; "action="" method="post">
<div class="form">  
      <div id="login">   
        <h1>Connextion de l'employee!</h1>
        
        <form action="/" method="post">
        
          <div class="field-wrap">
          <label>
            User Name<span class="req">*</span>
          </label>
          <input type="text" name="user" id="user" required autocomplete="off"/>
        </div>
        
        <div class="field-wrap">
          <label>
            Password<span class="req">*</span>
          </label>
          <input type="password" name="pass" id="pass"required autocomplete="off"/>
        </div>        
        <button class="button button-block"/>Log In</button><br>
		<button class="button button-block" type="reset" onclick="window.location.href='Index.html';"><strong>Annuler</strong></button>
        
        </form>

      </div>
      
    </div><!-- tab-content -->
    
</div> <!-- /form -->
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
 input {
	 font-size: 22px;
	 display: block;
	 width: 100%;
	 height: 8%;
	 padding: 45px 5px;
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
	 padding: 10px 0;
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
<?php
try {
    $bdd = new PDO('mysql:host=localhost;dbname=stage', 'abonne_steg', 'mannoubi12345@');
} catch (Exception $e) {
    die('error: ' . $e->getMessage());
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user = $_POST['user'];
    $password = $_POST['pass'];

    $req = $bdd->prepare("SELECT * FROM employee WHERE username=:user AND password=:pass");
    $req->execute(array(
        "user" => $user,
        "pass" => $password
    ));
    $res = $req->fetch();

    if ($res) {
        sleep(3);
        header('Location: formulaires.html');
    } else {
        echo "<script> alert('Email or Password incorrect '); </script>";
    }
}
?>