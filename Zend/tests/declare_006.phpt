--TEST--
Use of non-literals in declare ticks values crashes compiler
--FILE--
<?php
declare(ticks = UNKNOWN_CONST) {
  echo 'Done';
}
--EXPECTF--
Fatal error: ticks value must be an integer in %sdeclare_006.php on line 2
