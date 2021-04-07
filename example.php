<?php

require_once './demo.php';
class Example extends Demo //Example child class, Demo parent class
{
    public $color = 'red';
    protected $age = 30;
    private $area = 'local';

    public function __construct()
    {
        echo "hello php <br>";

    }

    public function division(){
        $this->multiplication();
    }
    protected function multiplication(){
        $res = "In Multiplication";
        echo $res;
        echo '<br>';
//        $this->addition();
    }
    private function hello(){
        echo "hello";
    }
}