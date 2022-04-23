<?php include_once("header.php") ?>
    <div class="wrapper-parcours">
        <div id="formContent-parcours" class="buttonInd">
            <form name="parcours.php">
              <label for="exampleInputPassword1" class="form-label">Parcours</label>
              <div class="input-group">
                <select class="form-select" id="parcours_select" aria-label="Example select with button addon" onchange="change_valeur();">
                  <option selected>Choix de parcours...</option>
                  <option value="IMR">IMR</option>
                  <option value="Phot.">Phot.</option>
                  <option value="Info.">Info.</option>
                </select>
              </div>
              <button type="submit" class="btn btn-parcours btn-primary">Rechercher</button>
            </form>
        <div>
    </div>
    <script>
        function change_valeur() {
            select = document.getElementById("parcours_select");
            choice = select.selectedIndex;
            valeur = select.options[choice].value;
            texte = select.options[choice].text;
            console.log(texte);
            console.log(valeur);
        }
    </script>
<?php include_once("footer.php") ?>
