<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<style type="text/css">
    table{
        border: 3px solid blue;
    }
    tr,th   {border: 1px solid black;   color: white;

    }
    body{
background-color: #111111;
    } 
    p{
        color: white;
    }


</style>
<body background=""><button style="background-color:#814111 "><a href="admin1st.html" style="color: white">Back</a></button><br><br>


    

<?php

    

    $con = mysqli_connect("localhost", "root", "", "cricket") or die(mysqli_error($con));

    $player=$_POST['playername'];
    $query="select * from player  where playername like '%$player%'";
   
    
    $res=mysqli_query($con,$query);
    if(mysqli_num_rows($res)>0){
            while($row = mysqli_fetch_assoc($res)){

       

        echo " <h1><p align="."center".">".$row["playername"]."<p></h1><table width="."100%"." height="."400px"."><tr><th height="."100%"."><img src=".$row["image"]." width="."700px"."></th><th><table width="."100%".">
        <tr><th>PLAYERNAME</th><th>".$row["playername"]."</th></tr>
        <tr><th>RANK</th><th>".$row["rank"]."</th></tr>
        <tr><th>TEAM</th><th>".$row["name"]."</th></tr>
        <tr><th>RUNS</th><th>".$row["runs"]."</th></tr>
        <tr><th>TYPE</th><th>".$row["type"]."</th></tr>
        <tr><th>BATTING BEST</th><th>".$row["batting_best"]."</th></tr>
        <tr><th>BOWLING BEST</th><th>".$row["bowling_best"]."</th></tr></table></th>
        </tr></table>";



    }

    }

else
{
     echo "<script type='text/javascript'>alert('PLAYER NOT FOUND!!');</script>";
      header("refresh: 0.01; url=admin1st.html");
    
}

mysqli_close($con);    ?>

</body></html>