

<!DOCTYPE html>
<html>
<head>
	<title>Registration Form</title>
</head>
<body>
    <h1>Person profile</h1>
    <form method="post" action="form2.php">
    

	<fieldset>
		<legend>Registration</legend>
	<table>
  
		<tr>
			<td>Name</td>
		<td><input type="text" name="name" value=""/></td>
		
 
 
		</tr>
		<tr>
			<td>Email</td>
			<td> <input type="email" name="" value=""/></td>
		
		</tr>
		
		<tr>
			<td>DOB:</td>
			<td><input type="date" name="" value=""/></td>
		</tr>
		<tr>
			<td>Gender: </td>
			<td> 
				<input type="radio" name="gender" value="">Male 
				<input type="radio" name="gender" value="">Female
				<input type="radio" name="gender" value="">Other
			</td>
		</tr>
		<tr>
			<td>Degree:</td>
			<td>
				<input type="checkbox" name="">SSC
				<input type="checkbox" name="">HSC
				<input type="checkbox" name="">BSC
			</td>
		</tr>
		<tr>
			<td>BG:</td>
			<td>
				<select>
					<option>A+</option>
					<option>B+</option>
					<option>A-</option>
				</select>
			</td>
		</tr>
		<tr>
			<td> Photo </td>
			<td><input type="file" name="browse" value=""/></td>
		</tr>
		<tr>
			<td></td>
			<td>
				<input type="button" name="" value="Click">
				<input type="submit" name="" value="Submit">
				<input type="reset" name="" value="Reset">
			</td>
		</tr>
	</table>
	</fieldset>
	</form>
</body>
</html>