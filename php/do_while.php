<?php

$items = [
  'for',
  'foreach',
  'while',
  'do-while'
];

$count = count($items);

echo "PHP Supports {$count} types of loops.";

$i = 0;
$li=null;
do {
  $li .= "<li>{$items[$i++]}</li>";
} while ($i < $count);

echo "<ul>{$li}</ul>";