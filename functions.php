<?php 

$letters = ['w','e','r','t','y','u','i','o','p','a','s','d','f','g','h','j','k','l','z','x','c','v','b','n','m'];
$m_letters = ['W','E','R','T','Y','U','I','O','P','A','S','D','F','G','H','J','K','L','Z','X','C','V','B','N','M'];
$numbers = ['1','2','3','4','5','6','7','8','9','0'];
$s_char = ['[',']','{','}','#','§','-','_',':',';','.',',','(',')','/','&','%','$','£','"','!','<','>'];

$all_char = array_merge($letters, $m_letters, $numbers, $s_char);

$pw_length = isset($_GET["pw-length"]) ?? null;
var_dump($_GET);
$pw_length_int = intval($_GET["pw-length"]);
var_dump($pw_length_int);

$pw = array_rand(array_flip($all_char), $pw_length_int);
var_dump($pw);


?>