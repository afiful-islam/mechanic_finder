<?php
$connect = mysqli_connect("localhost", "root", "", "mechanic_finder");
$output = '';
if(isset($_POST["query"]))
{
	$search = mysqli_real_escape_string($connect, $_POST["query"]);
	$query = "
	SELECT * FROM mechanics 
	WHERE address LIKE '%".$search."%'
	OR speciality LIKE '%".$search."%'
	";
}
else
{
	$query = "";
}
if($query==""){
	
}
else{
	$result = mysqli_query($connect, $query);
	if(mysqli_num_rows($result) > 0)
{
	$output .= '<div class="table-responsive">
					<table class="table table bordered">
						<tr>
							<th>Garage Name</th>
							<th>Address</th>
							<th>Speciality</th>
							<th>Other</th>
						</tr>';
	while($row = mysqli_fetch_array($result))
	{
		
		$output .= '
			<tr>
				<td>'.$row["garageName"].'</td>
				<td>'.$row["address"].'</td>
				<td>'.$row["speciality"].'</td>
				<td><a class="boxed-btn3" href="job_details.php?id='.$row["id"].'">Learn more</a></td>
			</tr>
		';
	}
	echo $output;
}
else
{
	echo 'Data Not Found';
}
}

?>