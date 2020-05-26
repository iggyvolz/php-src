--TEST--
Error exception mode
--FILE--
<?php
declare(error_exception=E_ALL);
try {
    echo $undef;
} catch(ErrorException $e) {
    var_dump($e);
}
--EXPECTF--
object(ErrorException)#1 (8) {
  ["message":protected]=>
  string(25) "Undefined variable $undef"
  ["string":"Exception":private]=>
  string(0) ""
  ["code":protected]=>
  int(2)
  ["file":protected]=>
  string(%i) "%s"
  ["line":protected]=>
  int(4)
  ["trace":"Exception":private]=>
  array(0) {
  }
  ["previous":"Exception":private]=>
  NULL
  ["severity":protected]=>
  int(1)
}
