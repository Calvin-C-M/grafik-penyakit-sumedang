<?php

function euclideanDistance($x1=0.0, $x2=0.0, $y1=0.0, $y2=0.0) {
    return sqrt(pow(($x1-$x2), 2) + pow(($y1-$y2), 2));
}

?>