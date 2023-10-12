<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>forum</title>

    <style>
body {
  font-family: sans-serif;
  background: white;
}

h1 {
  text-align: center;
  color: #fff;

}

form {
  margin-bottom: 1em;

}

label {
  display: block;
  margin-bottom: 0.5em;
  color: white;

}

textarea {
  display: block;
  width: 100%;
  height: 10em;
  margin-bottom: 1em;
}

button {
  background: var(--color-primary);
  background: rgba(39, 167, 118, 0.8);
  border: 0;
  padding: 10px 35px;
  color: #fff;
  transition: 0.4s;
  border-radius: 4px;
  margin-right: 10px; /* Add margin between buttons */
}

button:hover {
  background-color: rgba(39, 167, 118, 1);
}

.post {
  border-radius: 4px;
  box-shadow: none;
  font-size: 14px;
  background-color: #202020;
  border: 1px solid #2e3133;
  color: #fff;
  padding: 10px;
  margin-bottom: 10px;
}
#post-form input[type="text"], #post-form textarea {
  border-radius: 4px;
  box-shadow: none;
  font-size: 14px;
  background-color: #202020;
  border: 1px solid #2e3133;
  color: #fff;
  padding: 10px;
  margin-bottom: 10px;
}

.post-title {
  font-weight: bold;
  color: white;

}

.post-date {
  font-style: italic;
  color: #666;
}

.post-likes {
  margin-top: 0.5em;
  color: #666;
}

.liked {
  color: red;
}
title {
  color: #fff;
}

textarea {
    border-radius: 4px;
  box-shadow: none;
  font-size: 14px;
  background-color: #202020;
  border: 1px solid #2e3133;
  color: #fff;

}
input[type="text"] {

  border-radius: 4px;
  box-shadow: none;
  font-size: 14px;
  background-color: #202020;
  border: 1px solid #2e3133;
  color: #fff;


}


.btn {
  background: var(--color-primary);
  background: rgba(39, 167, 118, 0.8);
  border: 0;
  padding: 10px 35px;
  color: #fff;
  transition: 0.4s;
  border-radius: 4px; 
}


    </style>
  </head>

  <body>
    <h1>affichage forum</h1>

    <!-- Form to create new posts -->
   
<?php

$bdd = new PDO('mysql:host=localhost;dbname=forum', 'root', '');

$stmt = $bdd->query('SELECT * FROM forum');
    $donne=$stmt->fetchAll();
    echo"<table border='5px'>";
    foreach($donne as $v){
        echo("<style>
        table {
          border-collapse: collapse;
          width: 100%;
        }
        
        th, td {
          text-align: left;
          padding: 8px;
          border-bottom: 1px solid #ddd;
        }
        
        th {
          background-color: #f2f2f2;
          color: #333;
        }
        </style>
        
        <table>
          <tr>
            <th>Email</th>
            <th>Title</th>
            <th>Content</th>
          </tr>
          <tr>
            <td>".$v['email']."</td>
            <td>".$v['title']."</td>
            <td>".$v['content']."</td>
          </tr>
        </table>
        ");
    
    
        }

?>

