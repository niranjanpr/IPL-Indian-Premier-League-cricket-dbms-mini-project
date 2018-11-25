<?php

    session_start();

    $con = mysqli_connect("localhost", "root", "", "cricket") or die(mysqli_error($con));
    $team1=$_POST['team1'];
    $team2=$_POST['team2'];
    $date=$_POST['date'];
    $match_no=$_POST['match_no'];
    
    $query="insert into schedules(team1,team2,date,match_no) values('$team1','$team2','$date','$match_no')";
    if(mysqli_query($con,$query))
    {
    	echo "";
      echo "<script type='text/javascript'>alert('SCHEDULE ADDED, NEW RECORD CREATED SUCCESSFULLY!!');</script>";
      header("refresh: 0.01; url=addschedule.html");
    }
    else
    {
        echo "<script type='text/javascript'>alert('ERROR');</script>";
header("refresh: 0.01; url=addschedule.html");
mysqli_error($con);
    }
    ?>
    