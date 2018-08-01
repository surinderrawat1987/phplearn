<?php

for ($i = 1; $i <= 4; $i++) {

//    //space
    for ($s = 4; $s >= $i; $s--) {
        echo "-";
    }
//
//    //star
    for ($j = 0; $j < $i; $j++) {
        echo "*";
    }

    // rows
    echo "<br />";
}

for ($i = 1; $i <= 3; $i++) {

    //space
    for ($s = 0; $s <= $i; $s++) {
        echo "-";
    }

    //star
    for ($j = 3; $j >= $i; $j--) {
        echo "*";
    }

    // rows
    echo "<br />";
}