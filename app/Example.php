<?php
namespace App;
use App\Foo;

class Example {
    public function __construct(Foo $foo){
        $this->foo = $foo;
    }
}