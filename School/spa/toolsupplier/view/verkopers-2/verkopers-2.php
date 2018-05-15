<?php
require_once 'model/Verkoper.php';
?>
<table class="grid">
    <thead>
        <tr>
            <th class="sort">Naam</th>
            <th class="filter">Klanten</th>
            <th class="number sort filter">Kamer</th>
            <th class="number sort filter">Commissie</th>
            <th class="number sort filter">In dienst</th>
        </tr>
    </thead>
    <tbody>
        
        <?php 
        $rs = Verkoper::getCursor();
        while($verkoper = $rs->fetch()) {
            $klanten = $verkoper->getCustomerNames();
            ?>
            <tr>
                <td><?= $verkoper->VerkNaam ?></td>
                <td><?= implode('<br>', $klanten) ?></td>
                <td><?= $verkoper->KamerNr ?></td>
                <td><?= $verkoper->ComPct ?>%</td>
                <td><?= $verkoper->InDienst ?></td>
            </tr>
        <?php } ?>
    </tbody>
    
</table>
