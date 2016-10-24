<?php

$text=$_POST['pron'].",,".$_POST['gitl'].",,".$_POST['eszr'].",,".$_POST['abzt'].",,".$_POST['cdtm'].",,".$_POST['plks'].",,".$_POST['desc'];
file_put_contents("projects.txt",file_get_contents("projects.txt")."§§§§§".$text);

?>
Saved successfully.