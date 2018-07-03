<?php
require_once 'model/Product.php';

$products = Product::getAll();
?>
<table class="grid">
    <thead>
        <tr>
            <th class="number sort filter">Nummer</th>
            <th class="sort">Naam</th>
            <th class="number sort">Prijs</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($products as $product) { ?>
            <tr>
                <td><?= $product->ProdNr ?></td>
                <td><?= $product->ProdNaam ?></td>
                <td><?= $product->Prijs ?></td>
            </tr>
        <?php } ?>
    </tbody>
    
</table>
