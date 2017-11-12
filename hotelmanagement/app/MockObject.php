<?php

namespace App;

class MockObject {

    private $field;
    public function constructor(MockObject $field){
        $this->field = $field;
    }
    public function mockFunction(){
        return $this->field->returnSomething();
    }
}