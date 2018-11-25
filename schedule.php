<!DOCTYPE html>
<html>
<style >
	table{
		border: 1px solid black;
	}
	tr{
		border: 1px solid black;
	}
	th{
		border: 1px solid black;
	}
</style>
<head><p>
	<title>SCHEDULES</title>
</head>
<body>
	<button style="background-color:"><a href="admin1st.html" style="color:">Back</a></button>
	 <div style="margin-top:115px; style : center" >
	<table align="center">
		<tr>
			<th>Date</th>
			<th>Team1</th>
			<th>Team2</th>
			<th>Match Number</th>
			<th>VENUE</th>
		
		</tr>
		<?php
		$con=mysqli_connect("localhost","root","","cricket");
		$query="select * from schedules s,played_in p where  s.date=p.date and s.team1=p.team1 order by s.date";
		$result=mysqli_query($con,$query);
		if(mysqli_num_rows($result)>0)
		{
			while ($row=mysqli_fetch_assoc($result)) {
			echo "<tr><th>".$row["date"]."</th><th>".
			$row["team1"]."</th><th>".
			$row["team2"]."</th><th>".
			$row["match_no"]."</th><th>".$row["stadium_name"]."</th></tr>";
			}
		}
		mysqli_close($con);
		?>



		 <form action="tt.php" method="post"><table><tr align="center">
            <p style="text-align: center;font-size: 25;">Enter Match Number to retrieve players
            <input type="number" name="match_no" style="width: 300;height: 25;"><br><br>
            <input type="submit" style="float:center;" value="Submit">
            </p></tr></table>
    </form>




</body>
</html>