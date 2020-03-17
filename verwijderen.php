<?php
	include"database.php";
?>
<!DOCTYPE html>
<html>
	<head>
		<title>zender</title>
	
	</head>
	
	<body>
			
				
			
					
						<h3 > verwijderen nummers</h3><br>
						
					<?php
						if(isset($_POST["submit"]))
						{
							$sq= "delete from song where idsong ='idz'";
							if($db->query($sq))
							{
								echo "<div>verwijderen Success..</div>";
							}
							else
							{
								echo "<div >verwijderen Failed..</div>";
							}
							
						}
						
					?>
					<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
					     <label>id artiest</label><br>
					     <input type="text" name="idz" required class="input">
					     <br><br>
					     <label>duur</label><br>
					     <input type="text" name="oms" >
					     <br><br>
					     <label>titel</label><br>
					     <input type="text" name="slo">
					     <br><br>
					     <button type="submit" class="btn" name="submit">verwijderen nummers</button>
					</form>
				
				
				</div>
				<br>