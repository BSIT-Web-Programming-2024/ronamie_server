<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $message=$_POST['message'];


$con=new mysqli('localhost','root','','form');


if($con){
   //echo " Connection successful";
   
   $sql="insert into `register`(name,email,phone,message)values('$name','$email','$phone','$message')";

   $result=mysqli_query($con,$sql);

   if($result){
    echo " THANK YOU , YOUR DATA  INSERTED SUCCESSFULLY";
   }else{
    die(mysqli_error($con));
   }

   


}else{

    die(mysqli_error($con));
}

}
?>