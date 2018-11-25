<?php
    $con = mysqli_connect("localhost", "root","", "cricket") or die(mysqli_error($con));

    $player=$_POST['playername'];
    $sql="delete from player where playername like '$player'";
    if(mysqli_query($con,$sql)==true){
    $sql1 = "SELECT * from player where playername like'$player'";
 	$res=mysqli_query($con,$sql1);
	    if(mysqli_num_rows($res)==0)
		{   //if(mysqli_query($con,$sql)){
           //$sql1 = "SELECT * from player where playername='$player'";
 
 	 //  if(mysqli_query($con,$sql1))
   		// {
    	 echo "<script type='text/javascript'>alert('player deleted successfully!!');</script>";
      header("refresh: 0.01; url=deleteplayer.html");
    
}}
else{
	echo "<script language='javascript'>";
	echo "alert('ERROR IN DELETING')";
	echo "</script>";
    header("refresh: 0.01; url=deleteplayer.html");
    
}
mysqli_close($con);
?>    
