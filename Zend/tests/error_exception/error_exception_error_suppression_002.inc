<?php
declare(error_exception=E_ALL);
function a()
{
  try {
      echo @$undef;
  } catch(ErrorException $e) {
      var_dump($e);
  }
}