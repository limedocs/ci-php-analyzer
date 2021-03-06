<?php

// see http://php.net/manual/en/language.references.pass.php

function test(&$foo) { }

// Variables are allowed.
test($bar);

// NEW Statements are allowed.
class Foo { }
test(new Foo());

// Function Calls if they return references are allowed.
function & returnsRef() { $a = null; return $a; }
test(returnsRef());
