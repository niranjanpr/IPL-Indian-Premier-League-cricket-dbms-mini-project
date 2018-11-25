<?php

    session_start();

    $con = mysqli_connect("localhost", "root", "", "cricket") or die(mysqli_error($con));

    $stadium_name=$_POST['stadium_name'];
    $board_name=$_POST['board_name'];
    $team=$_POST['team'];
    $capacity=$_POST['capacity'];
    $doi=$_POST['doi'];

    $query="insert into stadiums(stadium_name,board_name,team,capacity,DOI) values('$stadium_name','$board_name','$team','$capacity','$doi')";
    if(mysqli_query($con,$query))
    {
    	
      echo "<script type='text/javascript'>alert('STADIUM ADDED, NEW RECORD CREATED SUCCESSFULLY!!');</script>";
      header("refresh: 0.01; url=addstadium.html");
    }
    else
    {
        echo "<script type='text/javascript'>alert('ERROR');</script>";
        header("refresh: 0.01; url=addstadium.html");
        mysqli_error($con);
    }
    ?>
    