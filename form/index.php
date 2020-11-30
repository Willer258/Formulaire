<?php
include 'header.php';?>

    <div class="container">

  <div class="row">
   
    <div class="col-md-8 order-md-1">
      <h4 class="mb-3">Formulaire</h4>
      <form class="needs-validation" method="post" >
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="nom">Nom</label>
            <input type="text" class="form-control" name="nom" id="nom" placeholder="" value="" required>
            
          </div>
          <div class="col-md-6 mb-3">
            <label for="prenom">Prenom</label>
            <input type="text" class="form-control" name="prenom" id="prenom" placeholder="" value="" required>
            
          </div>
        </div>

        <div class="mb-3">
          <label for="username">Nom d'utilisateur</label>
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text">User</span>
            </div>
            <input type="text" class="form-control" id="username" name="username" placeholder="Nom d'utilisateur" required>
            
          </div>
        </div>

        <div class="mb-3">
          <label for="email">Email <span class="text-muted">(Facultatif)</span></label>
          <input type="email" class="form-control" name="email"  id="email" placeholder="you@example.com">
        </div>

      
        <hr class="mb-4">
        <button class="btn btn-primary btn-lg btn-block" type="submit">Valider</button>
      </form>
    </div>
  </div>
  
  <?php include 'traitement.php';?>
  <footer class="my-5 pt-5 text-muted text-center text-small"></footer>

</div>

</body>
</html>
