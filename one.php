<?php

    

    $con = mysqli_connect("localhost", "root","", "cricket") or die(mysqli_error($con));

    $player=$_POST['playername'];
    $sql="DELETE FROM player where playername='$player'";
    if(mysqli_query($con,$sql)){
           $sql1 = "SELECT * from player where playername='$player'";
 
    if(mysqli_query($con,$sql1))
    {
    	echo "Player deleted successfully";
}
else{
	echo "<script language='javascript'>";
	echo "alert('error')";
	echo "</script>";
}}
mysqli_close($con);
?>    
