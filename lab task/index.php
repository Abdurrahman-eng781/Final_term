<?php

echo "<h2>PHP Built-in Functions Examples</h2>";

echo "<h3>strlen()</h3>";
$text = "Hello World";
echo strlen($text);
echo "<hr>";

echo "<h3>str_word_count()</h3>";
echo str_word_count($text);
echo "<hr>";

echo "<h3>str_contains()</h3>";
var_dump(str_contains($text, "World"));
echo "<hr>";

echo "<h3>strpos()</h3>";
echo strpos($text, "World");
echo "<hr>";

echo "<h3>strtoupper()</h3>";
echo strtoupper($text);
echo "<hr>";

echo "<h3>strtolower()</h3>";
echo strtolower($text);
echo "<hr>";

echo "<h3>str_replace()</h3>";
echo str_replace("World", "PHP", $text);
echo "<hr>";

echo "<h3>strrev()</h3>";
echo strrev($text);
echo "<hr>";

echo "<h3>trim()</h3>";
$str = "   AIUB   ";
echo trim($str);
echo "<hr>";

echo "<h3>explode()</h3>";
$colors = "Red,Green,Blue";
print_r(explode(",", $colors));
echo "<hr>";

echo "<h3>implode()</h3>";
$arr = ["PHP", "Java", "Python"];
echo implode(", ", $arr);
echo "<hr>";

echo "<h3>substr()</h3>";
echo substr($text, 6, 5);
echo "<hr>";

echo "<h3>is_int()</h3>";
var_dump(is_int(100));
echo "<hr>";

echo "<h3>is_float()</h3>";
var_dump(is_float(10.5));
echo "<hr>";

echo "<h3>is_nan()</h3>";
var_dump(is_nan(acos(8)));
echo "<hr>";

echo "<h3>is_numeric()</h3>";
var_dump(is_numeric("123"));
echo "<hr>";

echo "<h3>round()</h3>";
echo round(9.67);
echo "<hr>";

define("UNIVERSITY", "AIUB");
echo "<h3>define()</h3>";
echo UNIVERSITY;
echo "<hr>";

echo "<h3>date()</h3>";
echo date("d-m-Y");
echo "<hr>";

echo "<h3>strtotime()</h3>";
echo strtotime("10 August 2026");
echo "<hr>";

echo "<h3>time()</h3>";
echo time();
echo "<hr>";

echo "<h3>date_default_timezone_set()</h3>";
date_default_timezone_set("Asia/Dhaka");
echo date("h:i:s A");
echo "<hr>";

echo "<h3>date_default_timezone_get()</h3>";
echo date_default_timezone_get();
echo "<hr>";

echo "<h3>include() and require()</h3>";
echo "Example:<br>";
echo "include 'header.php';<br>";
echo "require 'config.php';";
echo "<hr>";

echo "<h3>json_encode()</h3>";
$student = [
    "name" => "Muhid",
    "dept" => "CSE"
];
$json = json_encode($student);
echo $json;
echo "<hr>";

echo "<h3>json_decode()</h3>";
$obj = json_decode($json);
echo $obj->name;
echo "<hr>";

echo "<h3>array()</h3>";
$fruits = array("Apple", "Banana", "Mango");
print_r($fruits);
echo "<hr>";

echo "<h3>array_keys()</h3>";
$person = [
    "name" => "Rahim",
    "age" => 22
];
print_r(array_keys($person));
echo "<hr>";

echo "<h3>array_merge()</h3>";
$a = [1, 2];
$b = [3, 4];
print_r(array_merge($a, $b));
echo "<hr>";

echo "<h3>array_push()</h3>";
array_push($fruits, "Orange");
print_r($fruits);
echo "<hr>";

echo "<h3>array_reverse()</h3>";
print_r(array_reverse($fruits));
echo "<hr>";

echo "<h3>sizeof()</h3>";
echo sizeof($fruits);
echo "<hr>";

echo "<h3>count()</h3>";
echo count($fruits);
echo "<hr>";

echo "<h3>sort()</h3>";
sort($fruits);
print_r($fruits);
echo "<hr>";

?>