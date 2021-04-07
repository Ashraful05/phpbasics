<?php


class Demo
{
    public $name="BITM";
    protected $city="Dhaka";
    private $country="Bangladesh";

    public function addition($x,$y){
//        echo $this->subtraction($x,$y);
        $z=$x+$y;
        echo $z;
    }
    protected function subtraction(){
        $res = 'In Subtraction';
        echo $res;


    }
    private function remainder(){
        echo 'In remainder';
        echo '<br>';
    }
}