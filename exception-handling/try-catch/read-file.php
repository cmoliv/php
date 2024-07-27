<?php

$data = [];

try {
  $f = fopen('data.csv', 'r');

  do {
    $row = fgetcsv($f);
    $data[] = $row;
  } while ($row);

  var_dump($data);
} catch (Exception $e) {
  echo $e->getMessage();
} finally {
  if ($f) {
    fclose($f);
  }
}
