<?php
// Connexion BDD
                       
try{
    $bdd = new PDO('mysql:host=localhost;dbname=dbform;charset=utf8', 'root', '');
}catch(Execption $e){
    die('Erreur :' . $e->getMessage());
}
if($_POST){
$req = $bdd->prepare('INSERT INTO form( nom_user, prenom_user, username, mail_user) 
VALUES(?, ?, ?, ?)');
$req->execute(array(
	 $_POST['nom'],
	 $_POST['prenom'],
	 $_POST['username'],
	 $_POST["email"])
	);

?>
<hr class="mb-4">
<p>Ajout effectué!!! <a href="stat.php"> Voir la liste</a></p>

<?php
}

?>