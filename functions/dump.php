<?php

function dump($var,$methode="var_dump"){
    echo "<pre>";
    $methode($var);
    echo "</pre>";
}