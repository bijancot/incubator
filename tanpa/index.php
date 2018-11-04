<?php
$url = "https://tanpa-batas.web.id/dhook.json";
$JSON = file_get_contents($url);

//echo $JSON;

$a = json_decode($JSON);
//var_dump($a);

echo $a->nama."<br>";
echo $a->type."<br>";
echo $a->price."<br>";
?>