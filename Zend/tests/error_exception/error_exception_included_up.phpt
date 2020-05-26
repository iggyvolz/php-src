--TEST--
Error exception mode should not trickle up from required files
--FILE--
<?php
require "error_exception_included_up.inc";
try {
    echo $undef;
} catch(ErrorException $e) {
    var_dump($e);
}
--EXPECTF--
Warning: Undefined variable $undef in %s on line 4
