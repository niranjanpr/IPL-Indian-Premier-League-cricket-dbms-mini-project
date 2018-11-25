
<?php

    session_start();
    $name=$_POST['name'];
   

    $runs=$_POST['runs'];
    $wickets=$_POST['wickets'];

    $no_of_matches=$_POST['no_of_matches'];

    $con = mysqli_connect("localhost", "root", "", "cricket") or die(mysqli_error($con));
    $q="update player set runs='$runs',wickets='$wickets',no_of_matches='$no_of_matches' where playername='$name'";
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