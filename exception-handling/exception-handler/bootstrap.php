<?php

set_exception_handler(function (Exception $e) {
  // set default timezone
  date_default_timezone_set('America/Sao_Paulo');

  // get the current date & time
  $time = date('F j, Y, g:i a e O');

  // format the exception message
  $message = "[{$time}] {$e->getMessage()}\n";

  // append to the error log
  error_log($message, 3, 'logs/errors.log');

  // show a user-friendly message
  echo 'Whoops, looks like something went wrong!';
});