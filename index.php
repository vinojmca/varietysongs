<?php
    require_once('includes/config.php');
?>
<h1><?php echo "Hello World"; ?></h1>
<h3>This is a test appa</h3>


<?php

// $artist = R::dispense('artist');
// $artist->name = "Eminem";
// R::store( $artist );

$artists = R::find('artist');
?>
<ol>
    <?php foreach($artists as $artist) { ?>
        <li><?php echo $artist->name; ?></li>
    <?php } ?>
</ol>