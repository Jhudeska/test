<?php
require_once 'model/Klant.php';
?>
<table class="grid">
    <thead>
        <tr>
            <th class="number sort">Nummer</th>
            <th class="sort">Naam</th>
            <th class="sort filter">Verkoper</th>
            <th class="sort filter">Hoofdkantoor</th>
        </tr>
    </thead>
    <tbody>

        <?php
        $rs = Klant::getCursor();
        while ($klant = $rs->fetch()) {
            ?>
            <tr>
                    <td><?= $klant->KlantNr ?></th>
                    <td><?= $klant->KlantNaam ?></th>
                    <td><?= $klant->VerkNaam ?></th>
                    <td><?= $klant->PlaatsHfdkntr ?></th>
            </tr>
        <?php } ?>
    </tbody>

</table>
