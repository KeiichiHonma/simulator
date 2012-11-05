<?php

namespace foo;
 
class MyClass
{
    public function MyMethod() {
        return __METHOD__;
    }
}
 
namespace bar;
 
class MyClass
{
    public function MyMethod() {
        return __METHOD__;
    }
}
 
 
$obj1 = new \foo\MyClass;
$obj2 = new \bar\MyClass;
$obj3 = new MyClass;
 
var_dump($obj1->MyMethod());    // => string(21) "foo\MyClass::MyMethod"
var_dump($obj2->MyMethod());    // => string(21) "bar\MyClass::MyMethod"
var_dump($obj3->MyMethod());    // => string(21) "bar\MyClass::MyMethod"
var_dump($_POST);
die();
?>