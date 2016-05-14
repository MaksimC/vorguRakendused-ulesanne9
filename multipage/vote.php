<?php
require_once ("head.html")
?>

<?php
$files = array_slice(scandir('pildid'), 2);
?>

<h3>Vali oma lemmik :)</h3>
<form action="tulemus.php" method="GET">
    <?php foreach($files as $id=>$pilt):?>
        <p>
            <label for="p<?php echo $id;?>">
                <img src="<?php echo "pildid/".$pilt;?>" alt="<?php echo $pilt;?>" height="100" />
            </label>
            <input type="radio" value="<?php echo $id;?>" id="p<?php echo $id;?>" name="pilt"/>
        </p>
    <?php endforeach; ?>
    </br>
    <input type="submit" value="Valin!"/>
</form>

<?php
require_once ("foot.html")
?>
