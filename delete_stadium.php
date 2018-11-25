<?php

    session_start();

    $con = mysqli_connect("localhost", "root", "", "cricket") or die(mysqli_error($con));

    $stadium_name=$_POST['stadium_name'];
    $sql="DELETE from stadiums where stadium_name='$stadium_name'";
    if(mysqli_query($con,$sql))
    {
       
        echo "<script type='text/javascript'>alert('Stadium deleted successfully!!');</script>";
      header("refresh: 0.01; url=deletestadium.html");
    
}
else{
    echo "error";
    header("refresh: 0.01; url=deletestadium.html");
    
}
?>    



