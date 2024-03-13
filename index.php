<?php

echo "bonjour";

$url = parse_url($_SERVER["REQUEST_URI"])["path"];

// ja lietotajs aiziet uz /, tad paradit
// controllers/index.php
if ($url == "/") {
    require "controllers/index.php";
}
// ja lietotajs aiziet uz /about,
// tad paradit controllers/about.php
if ($url == "/about") {
    require "controllers/about.php";
}

// ja lietotajs aizeit uz story,
// tad paradit controllers/story.php
if ($url == "/story") {
    require "controllers/story.php";
}