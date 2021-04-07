<?php
class Full_Name_1{
    public function full_name_1($data)
    {
        $firstName = $data['first_name'];
        $lastName  = $data['last_name'];
        $fullName  = $firstName.' '.$lastName;
        return $fullName;
    }
}
?>