<?php
require_once 'model/Verkoper.php';
?>
<table class="grid">
    <thead>
        <tr>
            <th class="sort sort">Nummer</th>
            <th class="sort">Naam</th>
            <th class="number sort filter">Commissie</th>
            <th class="number sort filter">In dienst</th>
            <th class="number sort filter">Kamer</th>
        </tr>
    </thead>
    <tbody>
        
        <?php 
        $rs = Verkoper::getCursor();
        while($verkoper = $rs->fetch()) {
            ?>
            <tr>
                <td><?= $verkoper->VerkNr ?></td>
                <td><?= $verkoper->VerkNaam ?></td>
                <td><?= $verkoper->ComPct ?></td>
                <td><?= $verkoper->InDienst ?></td>
                <td><?= $verkoper->KamerNr ?></td>
            </tr>
        <?php } ?>
    </tbody>
    
</table>
