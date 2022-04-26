<?php include_once("header.php") ?>
    <div class="wrapper-add">
        <div id="formContent-add" class="buttonInd">
            <form>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nom</label>
                <input type="name" class="form-control" placeholder="Nom" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Prénom</label>
                <input type="name" class="form-control" placeholder="Prenom" id="exampleInputPassword1">
              </div>
              <label for="exampleInputPassword1" class="form-label">Parcours</label>
              <div class="input-group">
                <select class="form-select" id="inputGroupSelect04" aria-label="Example select with button addon">
                  <option selected>Choix de parcours...</option>
                  <option value="IMR">IMR</option>
                  <option value="Phot.">Phot.</option>
                  <option value="Info.">Info.</option>
                  <option value="Snum.">Snum.</option>
                </select>
              </div>
              <br>
              <label for="exampleInputPassword1" class="form-label">Année en cours</label>
                <div class="input-group">
                  <select class="form-select" id="inputGroupSelect04" aria-label="Example select with button addon">
                     <option selected>Année...</option>
                     <option value="2019-20">2019-20</option>
                     <option value="2020-21">2020-21</option>
                     <option value="2021-22">2021-22</option>
                     <option value="2022-23">2022-23</option>
                  </select>
                </div>
              <br>
              <label for="exampleInputPassword1" class="form-label">Semestre en cours</label>
                <div class="input-group">
                  <select class="form-select" id="inputGroupSelect06" aria-label="Example select with button addon">
                     <option selected>Semestre...</option>
                     <option value="1">1</option>
                     <option value="2">2<option>
                     <option value="3">3<option>
                     <option value="4">4<option>
                     <option value="5">5<option>
                     <option value="6">6<option>
                  </select>
                </div>
              <button type="submit" class="btn btn-add btn-primary">Ajouter</button>
            </form>
        <div>
    </div>
<?php include_once("footer.php") ?>
