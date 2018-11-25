<?php

    session_start();

    $con = mysqli_connect("localhost", "root", "", "cricket") or die(mysqli_error($con));

    $match_no=$_POST['match_no'];
    $sql="delete from schedules where match_no='$match_no'";
    if(mysqli_query($con,$sql)>0)
    {
    	echo "<script type='text/javascript'>alert('SCHEDULE DELETED SUCCESSFULLY!!');</script>";
      header("refresh: 0.01; url=deleteschedule.html");
    
}
else{
	echo "error";
	header("refresh: 0.01; url=deleteschedule.html");
    
}
?>    


