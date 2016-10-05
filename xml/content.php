<?php
foreach($row as $i => $r):?>
    <serial no="<?= $i ?>">
        <skin><?= $r['p_skin']; ?></skin>
        <exterior><?= $r['p_exterior'] ?></exterior>
        <float><?= $r['p_float']; ?></float>
        <pic><?= $r["p_pic"]; ?></pic>
        <alternatePic><?= $r["p_alternatePic"]; ?></alternatePic>
        <marketPrice><?= $r['p_marketPrice']; ?></marketPrice>
        <grade><?= $r['p_grade'] ?></grade>
        <collectionLink><?= $r['p_collectionLink']; ?></collectionLink>
        <collection><?= $r['p_collection']; ?></collection>
    </serial>
<?php endforeach; ?>