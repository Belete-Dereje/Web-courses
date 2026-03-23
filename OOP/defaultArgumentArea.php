<?php
class AreaCalculator {
    public function area($length, $width = null) {
        // If width is not provided, calculate square area
        if ($width === null) {
            return $length * $length;
        }
        // If both length and width are provided, calculate rectangle area
        else {
            return $length * $width;
        }
    }
}


$area = new AreaCalculator();
echo $area->area(5) . "<br>";
echo $area->area(4, 6);
?>