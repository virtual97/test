<?php
class bar() {

};
$var1=”foo”;
$var2=”bar”;
$o=new $var2();
$o->$var1();
echo $o->$var1();