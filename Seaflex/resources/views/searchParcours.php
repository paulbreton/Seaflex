<?php include_once("header.php") ?>
    <div class="wrapper-parcours">
        <div id="formContent-parcours" class="buttonInd">
          <label for="exampleInputPassword1" class="form-label">Parcours</label>
          <div class="input-group">
            <select class="form-select" id="parcours_select" aria-label="Example select with button addon" onchange="change_valeur();">
              <option selected>Choix de parcours...</option>
                <?php foreach ($parcours as $parcour): ?>
                    <option value="<?php echo $parcour->code ?>"><?php echo $parcour->libelle ?></option>
                <?php endforeach ?>
            </select>
          </div>
          <button onclick="submit();" class="btn btn-parcours btn-primary">Rechercher</button>
        <div>
    </div>
    <script>
        var parcoursSelected = '';
        function change_valeur() {
            select = document.getElementById("parcours_select");
            choice = select.selectedIndex;
            parcoursSelected = select.options[choice].value;
            texte = select.options[choice].text;
        }

        function submit() {
            console.log(parcoursSelected)
            window.location.href = 'http://localhost:8000/parcours/'+parcoursSelected;
        }
    </script>
<?php include_once("footer.php") ?>
