<?php include_once("header.php") ?>
    <div class="wrapper-view">
        <div id="formContent-view" class="buttonInd">
          <label for="exampleInputPassword1" class="form-label">Liste views</label>
          <div class="input-group">
            <select class="form-select" id="views_select"  onchange="change_valeur();">
              <option selected>Choix de view...</option>
                <?php foreach ($views as $view): ?>
                    <option value="<?php echo $view->Tables_in_Seaflex ?>"><?php echo $view->Tables_in_Seaflex ?></option>
                <?php endforeach ?>
            </select>
          </div>
          <button onclick="submit();" class="btn btn-view btn-primary">Rechercher</button>
        </div>
    </div>
    <?php if(isset($columns)): ?>
    <div class="table-view">
        <table class="table table-striped">
            <thead>
            <tr>
                <?php foreach ($columns as $column): ?>
                    <th><?php echo $column->COLUMN_NAME ?></th>
                <?php endforeach; ?>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($results as $result): ?>
                <tr>
                    <?php foreach ($result as $key=>$value): ?>
                        <td><?php echo $value ?></td>
                    <?php endforeach ?>
                </tr>
            <?php endforeach ?>
            </tbody>
        </table>
    </div>

    <?php endif ?>

    <script>
        var viewSelected = '';
        function change_valeur() {
            select = document.getElementById("views_select");
            choice = select.selectedIndex;
            viewSelected = select.options[choice].value;
            texte = select.options[choice].text;
        }

        function submit() {
            window.location.href = 'http://localhost:8000/views?view='+viewSelected;
        }
    </script>
<?php include_once("footer.php") ?>
