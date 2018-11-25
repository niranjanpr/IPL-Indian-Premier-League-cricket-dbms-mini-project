
<?php

    session_start();
    $name=$_POST['name'];
    $rating=$_POST['rating'];

    
    $con = mysqli_connect("localhost", "root", "", "cricket") or die(mysqli_error($con));
    $q="update team set rating='$rating' where name='$name'";
    
    if(mysqli_query($con,$q))
    {
        header("refresh: 0.01; url=rank.php");
    }
    else
    {echo "<script type='text/javascript'>alert('ERROR!!');</script>";
      header("refresh: 0.01; url=rank.php");
    
        //echo "error";
        //header("refresh: 0.01; url=admin1st.html");
    }
    ?>