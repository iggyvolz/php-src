--TEST--
Error exception mode should take effect in nested functions
--FILE--
<?php
declare(error_exception=E_ALL);
function a():void
{
    try {
        echo $undef;
    } catch(ErrorException $e) {
        var_dump($e);
    }
}
a();
class b {
    public static function c():void
    {
        try {
            echo $undef;
        } catch(ErrorException $e) {
            var_dump($e);
        }
    }
}
b::c();

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
  int(6)
  ["trace":"Exception":private]=>
  array(1) {
    [0]=>
    array(4) {
      ["file"]=>
      string(%i) "%s"
      ["line"]=>
      int(11)
      ["function"]=>
      string(1) "a"
      ["args"]=>
      array(0) {
      }
    }
  }
  ["previous":"Exception":private]=>
  NULL
  ["severity":protected]=>
  int(1)
}
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
  int(16)
  ["trace":"Exception":private]=>
  array(1) {
    [0]=>
    array(6) {
      ["file"]=>
      string(%i) "%s"
      ["line"]=>
      int(22)
      ["function"]=>
      string(1) "c"
      ["class"]=>
      string(1) "b"
      ["type"]=>
      string(2) "::"
      ["args"]=>
      array(0) {
      }
    }
  }
  ["previous":"Exception":private]=>
  NULL
  ["severity":protected]=>
  int(1)
}