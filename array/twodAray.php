<?php
$cars=[["volvo",18,22],["BMW",15,13],["RangeRover",16,11]];
array_push($cars,["saab",5,2]);
// array_pop($cars);
rsort($cars);
echo "<table border=1 >";
echo"<tr>";
echo"<th>Name</th>";
echo"<th>Stock</th>";
echo"<th>Sold</th>";
echo"</tr>";
for($row=0;$row<count($cars);$row++){
    echo"<tr>";
    for($col=0;$col<count($cars[$row]);$col++){
        echo"<td>".$cars[$row][$col]."</td>";
    }
    echo"</tr>";
}
echo"</table>";

echo"<br><br>";
$d=date("D");
if($d=="Mon"){
    echo "Have a nice Saturday";
}
else{
    echo "Have a nice day";
}
?>