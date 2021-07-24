<?php
    $range_min = 2017;
    $range_max = 2021;
    for ($y = $range_min; $y <= $range_max; $y++) {
        if($y == 2020){
            continue;
        }
        if ($y == $year) {
            echo "<li class='active'>";
        } else {
            echo "<li>";
        }

        echo "<a href='$y.php'>$y</a>";
        echo "</li>";
    }
?>

