<?php

function divide($x, $y)
{
  if (!is_numeric($x) || !is_numeric($y)) {
    throw new InvalidArgumentException('Both arguments must be numeric');
  }

  if ($y === 0) {
    throw new Exception('Division by zero is not allowed');
  }

  $result = $x / $y;

  return $result;
}

try {
  $result = divide(10, 0);
  echo $result;
} catch (Exception $e) {
  echo "Caught exception: " . $e->getMessage() . "\n";
}
