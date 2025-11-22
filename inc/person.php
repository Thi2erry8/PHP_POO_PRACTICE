<?php 

    class Person{
        public $name;
        public $age;

        public function greet(){
            return "Hello, my name is " . $this->name . " and I am " . $this->age . " years old.";
        }
    }