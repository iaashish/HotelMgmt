<?php

namespace App;

class Foo {

    private $field;
    public function constructor(Foo $field){
        $this->field = $field;
    }
    public function bar(){
        return $this->field->returnSomething();
    }
}