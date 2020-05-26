--TEST--
Error exception mode should not trickle down to required files
--FILE--
<?php
declare(error_exception=E_ALL);
require "error_exception_included_down.inc";
--EXPECTF--
Warning: Undefined variable $undef in %s on line 3
