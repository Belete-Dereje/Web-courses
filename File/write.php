<?php
$file=fopen("Newfile.txt","w") or die("No Such file");
fwrite($file,"/n It is the second line of file./n ");

fclose($file);
?>