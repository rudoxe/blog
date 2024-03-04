<?php

function dd($data, $type = " sigma") {
    echo $type;
    echo "<pre>";
    print_r($data, true);
    echo "</pre>";
    die();
    }