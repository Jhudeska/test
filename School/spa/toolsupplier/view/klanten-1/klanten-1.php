<?php
require_once 'model/Klant.php';
?>
<table class="grid">
    <thead>
        <tr>
            <th class="number sort">Nummer</th>
            <th class="sort">Naam</th>
            <th class="number filter">Verkoper</th>
            <th class="sort filter">Hoofdkantoor</th>
        </tr>
    </thead>
    <tbody>

        <?php
        foreach (Klant::getAll() as $klant) {
            ?>
            <tr>
                <td><?= $klant->KlantNr ?></td>
                <td><?= $klant->KlantNaam ?></td>
                <td><?= $klant->VerkNr ?></td>
                <td><?= $klant->PlaatsHfdkntr ?></td>
            </tr>
        <?php } ?>
    </tbody>

</table>
