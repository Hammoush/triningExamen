<?php
	include"database.php";
?>
<!DOCTYPE html>
<html>
	<head>
		<title>zender</title>
	
	</head>
	
	<body>
			
				
			
					
						<h3 > wijzigen nummers</h3><br>
						
					<?php
						if(isset($_POST["submit"]))
						{
							$sq= "UPDATE song SET titel = 'ti', duur='du' WHERE idsong ='ids'";
							if($db->query($sq))
							{
								echo '<div > wijzigen Success..</div>';
							}
							else
							{
								echo '<div > wijzigen Failed..</div>';
							}
							
						}
						
					?>
					<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
					     <label>id artiest</label><br>
					     <input type="text" name="ids" required class="input">
					     <br><br>
					     <label>duur</label><br>
					     <input type="text" name="du" >
					     <br><br>
					     <label>titel</label><br>
					     <input type="text" name="ti" >
					     <br><br>
					     <button type="submit"  name="submit">wijzigen nummers</button>
					</form>
				
				
				</div>
				<br>
				
				
				
			</div>
	
	</body>
</html>