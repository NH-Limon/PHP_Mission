<?php
    # Multi-level inheritance In PHP
    class Grandfather{
        public function helloGrandfather(){
            return "Hello Grandfather" . "<br>";
        }
    }

    class Father extends Grandfather{
        public function helloFather(){
            return "Hello Father<br>";
        }
    }

    class Me extends Father{
        public function showAllData(){
            echo $this -> helloGrandfather();
            echo $this -> helloFather();
            echo "Hello Myself";
        }
    }

    $obj = new Me();
    $obj -> showAllData();
?>