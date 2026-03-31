<?php
$file =fopen("Newfile.txt", "r") or die("ERROR");
// while(!feof($file)){
//   echo fgets($file);
// }

#Th another way to read file
$content=fread($file,filesize("Newfile.txt"));
echo "$content";
fclose($file);
?>