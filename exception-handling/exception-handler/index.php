<?php

require "bootstrap.php";

function add($x, $y)
{
  if (!is_numeric($x) || !is_numeric($y)) {
    throw new InvalidArgumentException("Both arguments must be numeric or numeric strings");
  }

  return $x + $y;
}

echo add("Hi", "there");