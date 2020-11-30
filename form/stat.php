<?php
include 'header.php';
?>
<h2>Liste des utilisateurs</h2>

<div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th>#</th>
              <th>Name</th>
              <th>lastname</th>
              <th>Username</th>
              <th>Email</th>
            </tr>
          </thead>
          <tbody>
<?php
try
{
	// Connexion à MySQL
	$bdd = new PDO('mysql:host=localhost;dbname=dbform;charset=utf8', 'root', '');
}
catch(Exception $e)
{
	// En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : '.$e->getMessage());
}

// Si tout va bien, on peut continuer


$info = $bdd->query('SELECT * FROM form ');
$i=1;
 while ($donnees = $info->fetch()){
?>
            <tr>
              <th><?=$i++;?></th>
              <th><?=$donnees['nom_user']; ?></th>
              <th><?=$donnees['prenom_user'];?></th>
              <th><?=$donnees['username'];?></th>
              <th><?=$donnees['mail_user'];?></th>
            </tr>
<?php
}

$info->closeCursor(); // Termine le traitement de la requête
?>
 </tbody>
        </table>
      </div>
    </main>
  </div>
</div>

<hr class="mb-4">
<a href=index.php>Retourner Au formulaire</a>
</body>
</html>
