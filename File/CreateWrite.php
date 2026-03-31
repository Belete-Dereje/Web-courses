<?php
$fileName="Newfile.txt";
$file=fopen($fileName,"w") or die("Unable to open!");
$text="Hello World from php File Handling";
fwrite($file,$text);
fclose($file);

echo "file created and writen to it successfully";
?>