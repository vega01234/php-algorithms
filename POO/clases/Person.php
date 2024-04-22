<?php

    class Person {
        
        public $name, $lastname, $age;

        public function setName ($name) {
            $this->name = strtolower($name);
        }

        public function getName () {
            return ucwords($this->name);
        }

        public function setLastName ($lastname) {
            $this->lastname = strtolower($lastname);
        }

        public function getLastName () {
            return ucwords($this->lastname);
        }

    }