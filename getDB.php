<?php
    function getDb(){
        $servername='localhost';
        $username='root';
        $password='';
        $database='ecom';
        $con=new mysqli($servername,$username,$password,$database);
        if($con->connect_error){
            return null;
        }
        else{
            return $con;
        }
    }
?>