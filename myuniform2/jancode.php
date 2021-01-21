<?php
require_once("./phpQuery-onefile.php");


$html = file_get_contents("https://www.jancode.xyz/word/%E3%83%A8%E3%83%8D%E3%83%83%E3%82%AF%E3%82%B9+%E3%83%86%E3%83%8B%E3%82%B9+%E3%82%B7%E3%83%A3%E3%83%84/");
echo phpQuery::newDocument($html)->find("a")->text();
// echo phpQuery::newDocument($html)->find(".spotPanel-content")->text();


$html2 = file_get_contents("https://www.jancode.xyz/word/%E3%83%A8%E3%83%8D%E3%83%83%E3%82%AF%E3%82%B9+%E3%83%86%E3%83%8B%E3%82%B9+%E3%82%B7%E3%83%A3%E3%83%84/page-2.html");
echo phpQuery::newDocument($html2)->find("a")->text();
