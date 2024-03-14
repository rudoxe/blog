<?php


$url = parse_url($_SERVER["REQUEST_URI"])["path"];

// ja lietotajs aiziet uz /, tad paradit
// controllers/index.php
if ($url == "/") {
    require "controllers/index.php";
} else if ($url == "/about") {
    require "controllers/about.php";
} else if ($url == "/story") {
    require "controllers/story.php";
} else {
    http_response_code(404);
    require "controllers/404.php";
}
// if ($url == "/about") {
//     require "controllers/about.php";
// }

// ja lietotajs aizeit uz story,
// tad paradit controllers/story.php


// if ($url == "/story") {
//     require "controllers/story.php";
// }