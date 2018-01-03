<?php 


?>

<!-- index.html, log in page, register.  -->

<html>
      <head>  
           <title>BCIT StudyBuddy</title>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
      </head>  
<body>

<table border="1">
	<tr>
		<th>
			Building
		</th>
		<th>
			Room #
		</th>
		<!-- <th>
			Add / Remove people -->
		<th>
			Program
		
		</th>
		<th>
			Capacity
		</th>
		
	</tr>
	
	<tr>
		<td>SW5</td>
		<td>201</td>
		
		<td></td>
		<td>0 / 25</td>
	</tr>


</table>
<form action="rooms.txt" method="get">
	<input type="text" name="building" />
	<input type="text" name="room" />
	<input type="text" name="program" />
	<input type="text" name="capacity" /> 
</form>

</body>
</html>