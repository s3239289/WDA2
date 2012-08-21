<?php
    //Andrew should probably show us his idea here.
    //As I can't remember it in detail

    class Form {
        public function __construct() {

        }

        public function addSelect($array, $name, $class, $id, $errors) {
            echo "<select name=\"$name\" class=\"$class\" id=\"$id\" selected=\"selected\">";
            foreach($array as $value) {
                foreach ($errors as $error) {
                    //Validate the option and then display some stuff
                }
            }
            echo "</select>";
        }
        
        public function checkCode() {

        }

        public function displaySelect($name) {
            echo "<option value=\"\" selected=\"selected\"></option>";
            echo "<option value=\"$name\">$name</option>";
        }

        public function displayError($name) {
            //echo "<option value=\"\" selected=\"selected\"></option>";
            //echo "<option value=\"$name\">$name</option>";
        }
    }
?>
