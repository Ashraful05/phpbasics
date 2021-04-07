<?php


class Full_Name
{
//    public function make_full_name($data){
////        echo '<pre>';
////        print_r($data);
//        $first_name = $data['first_name'];
//        $last_name  = $data['last_name'];
//        $full_name = $first_name.' '.$last_name;
//        return $full_name;
//    }

    public function make_full_name($data)
    {
        $firstName = $data['first_name'];
        $lastName  = $data['last_name'];
        $fullName  = $firstName.' '.$lastName;
        return $fullName;
    }

}