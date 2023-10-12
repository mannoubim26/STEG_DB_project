<form id="post-form" method="post">
    <label for="title">email:</label>
      <input type="text" id="email" name="email" required>
      <label for="title">Title:</label>
      <input type="text" id="title" name="title" required>
      
      <label for="content">Content:</label>
      <textarea id="content" name="content" required></textarea>

      <!-- <label for="date">Date:</label>
      <input type="date" id="date" name="date" required> -->

      <button type="submit" name="submit">Create Post</button>
    </form>
<?php
if(isset($_POST['submit'])) {
$email = $_POST['email'];
$title = $_POST['title'];
$content = $_POST['content'];
$bdd = new PDO('mysql:host=localhost;dbname=forum', 'root', '');

$req="insert into forum values('$email','$title','$content')";

    $result=$bdd->exec($req);

    if ($result) {
        echo "<br>Insertion  avec Succès ! ";
    }else{
        echo "<br>Insertion Echouée ! ";
    }

}
?>