<?php


class Student
{
    protected $connection;
    public function __construct()
    {
        $hostName = 'localhost:3307';
        $userName = 'root';
        $password = ' ';
        $databaseName = 'db_student_info';
        $this->connection = mysqli_connect($hostName,$userName,$password,$databaseName);
        if(!$this->connection){
            die('Connection Fail'.mysqli_error($this->connection));
        }

    }

    public function save_student_info($data)
    {
//        echo '<pre>';
//        print_r($data);
//        exit();

//        $host_name = 'localhost:3307';
//        $user_name = 'root';
//        $password  = '';
//        $db_name   = 'db_student_info';
//        $connection = mysqli_connect($host_name,$user_name,$password,$db_name);

            $sql = "insert into tbl_student(student_name,phone_number,email_address,address)"
                . "values('$data[student_name]','$data[phone_number]','$data[email_address]','$data[address]')";

            if(mysqli_query($this->connection,$sql)){
                $message = 'Your information saved Successfully!!!!';
                return $message;

            }else{
                mysqli_error('Query Problem'.$this->connection);
            }


//        else{
//            die('Connection failed'.mysqli_error($connection));
//        }
//        echo $connection;
//        echo '<pre>';
//        print_r($connection);
//        exit();

//        if(!$connection){
//            die('Connection failed'.mysqli_error($connection));
//        }

//        $sql = "insert into tbl_student(student_name,phone_number,email_address,address)"
//            ."values('$data[student_name]','$data[phone_number]','$data[email_address]','$data[address]')";
//
//        if(mysqli_query($connection,$sql))
//        {
//            $message="your information saved successfully!!!!";
//            return $message;
//
//        }else{
//            die('Query Problem'.mysqli_error($connection));
//        }
//
//    }

    }

    public function show_student_info()
    {
        $sql  = "select * from tbl_student";
        if(mysqli_query($this->connection,$sql)){
            $queryResult = mysqli_query($this->connection,$sql);
            return $queryResult;
//            while($studentInfo = mysqli_fetch_assoc($queryResult))
//            {
//                echo '<pre>';
//                print_r($studentInfo);
//
//            }
//            exit();


        }else{
            die('Query Problem'.mysqli_error($this->connection));
        }

    }
//    public function show_student_info_by_id($studentId){
//
//        $sql  = "select * from tbl_student where id = '$studentId' ";
//        if(mysqli_query($this->connection,$sql)){
//            $queryResult = mysqli_query($this->connection,$sql);
//            return $queryResult;
//        }else{
//            die('Query Problem'.mysqli_error($this->connection));
//        }
//    }
//    public function show_student_info_by_id($studentId){
//        $sql = "select * from tbl_student where id = '$studentId' ";
//        if(mysqli_query($this->connection,$sql))
//        {
//           $queryResult = mysqli_query($this->connection,$sql);
//           return $queryResult;
//        }else{
//            die('Query problem'.mysqli_error($this->connection));
//        }
//    }
    public function show_student_info_by_id($studentId)
    {
        $sql = "select * from tbl_student where id = '$studentId' ";
        if(mysqli_query($this->connection,$sql))
        {
            $queryResult = mysqli_query($this->connection,$sql);
            return $queryResult;
        }else{
            die('Query Problem'.mysqli_error($this->connection));
        }
    }
    public function update_student_info($data){
        $sql = "update tbl_student set student_name = '$data[student_name]',phone_number = '$data[phone_number]',email_address = '$data[email_address]',address = '$data[address]' where id = '$data[id]'";
        if(mysqli_query($this->connection,$sql))
        {
            session_start();
            $_SESSION['message']='Student Info Updated successfully!!!';
           header('Location: view_student.php');
        }else{
            die('Query Problem'.mysqli_error($this->connection));
        }

    }
    public function delete_student_info($id)
    {
        $sql = "DELETE from tbl_student where id = '$id' ";
        if(mysqli_query($this->connection,$sql))
        {
            $message = 'Student Info deleted successfully!!!';
            return $message;
        }else{
            die('Query Problem'.mysqli_error($this->connection));
        }

    }
}