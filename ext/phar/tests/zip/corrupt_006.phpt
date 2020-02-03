--TEST--
Phar: zip with file created from stdin
--SKIPIF--
<?php if (!extension_loaded("phar")) die("skip"); ?>
--FILE--
<?php
try {
    new PharData(__DIR__ . '/files/stdin.zip');
} catch (Exception $e) {
    echo $e->getMessage() . "\n";
}
?>
--EXPECTF--
phar error: Cannot process zips created from stdin (zero-length filename) in zip-based phar "%sstdin.zip"
