--TEST--
MongoDB\Driver\CursorInterface is extending Traversable
--FILE--
<?php
var_dump(in_array('Traversable', class_implements('MongoDB\Driver\CursorInterface')));
?>
===DONE===
<?php exit(0); ?>
--EXPECT--
bool(true)
===DONE===
