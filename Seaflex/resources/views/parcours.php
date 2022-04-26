<?php include_once("header.php") ?>
<div class="wrapper-parcours-show">
    <div id="formContent-parcours-show" class="buttonInd">
        <h4><?php echo $parcours->libelle ?></h4>
        <div>Liste des Ue</div>
        <?php if ($types !== []):?>
            <table>
                <thead>
                <tr>
                    <th>Année</th>
                    <th>Semestre</th>
                    <th>Ue majeur</th>
                    <th>Ue mineur</th>
                </tr>
                </thead>
                <tbody>
                    <?php foreach ($types as $type): ?>
                        <tr>
                            <td><?php echo $type->annee ?></td>
                            <td><?php echo $type->semestre ?></td>
                            <td><?php echo $type->majeur ?></td>
                            <td><?php echo $type->mineur ?></td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        <?php else: ?>
            <i>Pas d'UE</i>
        <?php endif; ?>
    <div>
</div>
<?php include_once("footer.php") ?>

