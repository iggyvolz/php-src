--TEST--
Error suppression operator should have no effect on errors promoted to error_exception
--FILE--
<?php
require "error_exception_error_suppression_002.inc";
@a();

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
      int(3)
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