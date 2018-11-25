<?php

    //session_start();

    $con = mysqli_connect("localhost", "root", "", "cricket") or die(mysqli_error($con));

    $username = $_POST['uname'];
    $password = $_POST['psw'];
    $rp=$_POST['conpsw'];
      if($password==$rp){
    $check_u = "insert into login values('$username','$password')";
    
    //$check_p = "select * from admin where username = '$username' and password = '$password'";
    //$res_p = mysqli_query($con,$check_p) or die(mysqli_error($con));
      if(mysqli_query($con,$check_u)){
    //if(mysqli_num_rows($res_u)==0)
   // {
     // echo "<script type='text/javascript'>alert('Incorrect username!!');</script>";
     // header("refresh: 0.01; url=admin.html");
    

    //if(mysqli_num_rows($res_p)==0)
   // {
      echo "<script type='text/javascript'>alert('ACCOUNT CREATED!!');</script>";
      header("refresh: 0.01; url=login.html");
    }

    else
    {
      echo "<script type='text/javascript'>alert(' ACCOUNT NOT CRETAED!!');</script>";
     header("refresh: 0.01; url=create.html");
    }
  }
  else
  {
     echo "<script type='text/javascript'>alert('PASSWORDS DIDN'T MATCH!!');</script>";
      header("refresh: 0.01; url=create.html");
    
  }
?>