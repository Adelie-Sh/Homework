<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Registration</title>
</head>
<body>
	<form  action="Item.php" name="form" method="post">
	  <p>
		Full Name: 
		<input type="text" name ="name">  <br><br>
		
		
		Item:
		<select name="Item" >

		<option  value="100" value="item1"> Item1 </option>
		<option  value="200" > Item2 </option>
		<option  value="300" > Item3 </option>
		<option  value="400" > Item4 </option>
		</select>
		<br><br>
		
		Quantity: 
		<input type="number" name ="quantity" min="0" max="100" >
		<br><br>	
		
		<input type="submit" value ="To submit" name="Button"> 
		&nbsp &nbsp
		<input type="reset" value="Reset form"> 
		  <p>
	</form>
	
	
	<pre>
	<?php
	if(isset($_POST['Button']))
	{
		echo " <br> <h3><b><i><u>Note:</u></i></b></h3>";
		echo "<b>Full name:". $_POST['name']."<br></b>";
		echo "<b>Quantity:".$_POST['Item']."</b><br>";
		$quant =$_POST['quantity'] ;
		$naimen =$_POST['Item'];
		echo "<b>Itog=".$quant*$naimen."</b>";
		
	}
?>
	
	</pre>
</body>
</html>