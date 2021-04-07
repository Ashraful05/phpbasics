<?php


class login
{
    protected $connection;
    public function __construct()
    {
        $hostName = 'localhost:3307';
        $userName = 'root';
        $password = '';
        $databaseName = 'db_blog';
        $this->connection = mysqli_connect($hostName,$userName,$password,$databaseName);
        if(!$this->connection){
            die('Connection Fail'.mysqli_error($this->connection));
        }
    }
    public function admin_login_check($data){
      $password = md5($data['password']);
      $sql = "SELECT *FROM tbl_admin WHERE email_address='$data[email_address]' AND password='$data[password]'";
      $queryResult = mysqli_query($this->connection,$sql);
      $adminInfo = mysqli_fetch_assoc($queryResult);

      if($adminInfo) {
          header('Location:dashboard.php');
      }
      else{
          header('Location:index.php');
      }


    }

}