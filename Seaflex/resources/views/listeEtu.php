<?php include_once("header.php") ?>
    <div class="wrapper-listeEtu">
        <div id="formContent-listeEtu" class="buttonInd">
            <table class="table table-hover">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Prénom</th>
                  <th scope="col">Nom</th>
                  <th scope="col">Code</th>
                  <th scope="col">Parcours</th>
                  <th scope="col">Action</th>

                </tr>
              </thead>
              <tbody>
                  <?php foreach($etudiants as $etudiant): ?>
                    <tr>
                      <th scope="row"></th>
                      <td><?= $etudiant->prenom; ?></td>
                      <td><?= $etudiant->nom; ?></td>
                      <td><?= $etudiant->code; ?></td>
                      <td> <?= $etudiant->parcours->libelle; ?> </td>
                      <td><a href="<?php echo url('etudiant/'.$etudiant->code) ?>"><button class="btn btn-listeEtu btn-primary" type="button">modifier</button> <button class="btn btn-listeEtu btn-danger" type="button">supprimer</button> </td>
                    </tr>
                  <?php endforeach; ?>
              </tbody>
            </table>
        <div>
    </div>
<?php include_once("footer.php") ?>
