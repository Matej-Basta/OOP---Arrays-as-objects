<?php

require_once "MyArray.php";



$array1 = new MyArray(['apple', 'orange', 'peach']);
$array2 = new MyArray(['pear', 'banana']);
 
$result = $array1->merge($array2->elements);
 
var_dump($result);