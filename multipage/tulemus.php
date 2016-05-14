<?php
require_once ("head.html")
?>




    <h3>Valiku tulemus</h3>
    <p><?php if(isset($_GET) && !empty($_GET["pilt"])):?>
    <p> valik tehtud!</p>
<?php  else : ?>
    <p style="color: red;">Tehke oma valiku!</p>
<?php  endif; ?></p>

<?php
require_once ("foot.html")
?>