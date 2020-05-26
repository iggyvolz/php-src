<?php
try {
    echo $undef;
} catch(ErrorException $e) {
    var_dump($e);
}