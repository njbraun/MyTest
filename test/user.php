<?php
class User {

    protected $name;

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function doSomething() {
        return 323;
    }

    public function talk() {
        return "Hello world!!";
    }
}
