<?php include_once("header.php") ?>
<div class="wrapper-ficheEtu">
    <div id="formContent-ficheEtu" class="buttonInd-ficheEtu">
        <form>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label"><u>Nom:</u></label><p><i><?= $etudiant->nom; ?></i></p>
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label"><u>Prénom:</u></label><p><i><?= $etudiant->prenom; ?></i></p>
          </div>
          <label for="exampleInputPassword1" class="form-label"><u>Parcours:</u> (<a href="<?php echo url(env('APP_URL').'/parcours') ?>">visualiser les parcours</a>)</label><p><i><a href="<?php echo url(env('APP_URL').'/parcours/'.$etudiant->parcours->code) ?>"><?= $etudiant->parcours->libelle; ?></a></i></p>
          <label for="exampleInputPassword1" class="form-label"><u>Année en cours:</u></label><p><i>2021-22</i></p>
          <label for="exampleInputPassword1" class="form-label"><u>Semestre en cours:</u></label><p><i>1</i></p>
          <label class="historique"><a href="<?php echo url(env('APP_URL').'/etudiant/historique/'.$etudiant->code) ?>"><button class="btn btn-ficheEtu btn-primary" type="button">Voir l'historique</button></label>
        </form>
    <div>
</div>
<?php include_once("footer.php") ?>

