<?php

function divide($x, $y)
{
  try {
    $result = $x / $y;

    return $result;
  } catch (\Exception $e) {
    return null;
  } finally {
    return null;
  }
}

$result = divide(10,5);
echo $result;