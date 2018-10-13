<?php
/**
 * Created by PhpStorm.
 * User: LILIS
 * Date: 2018-10-12
 * Time: 오후 6:53
 */

function copyright() {
    $year = date('Y');
    if ($year == 2018) {
        echo 2018;
    } else {
        echo 2018 . "&mdash;" . $year;
    }
}

function randNumbers() {
    echo number_format(rand(0,1000000000));
}

function loremIpsum() {
    echo "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.";
}