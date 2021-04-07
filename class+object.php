<?php
class helloWorld{
    public $name = 'ashraful';
    public $city = 'saidpur';
    function identity(){
        echo "Hello World";
        echo '<br>';
    }
    function destination(){
        echo "Saidpur";
        echo '<br>';
    }
}
$obj_helloWorld = new helloWorld();
$obj_helloWorld->destination();
$obj_helloWorld->identity();
