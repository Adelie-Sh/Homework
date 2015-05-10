<html>
<head>	
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>Register</title>
</head>
<body>
<form 
<form method="post" name="register"  action="<?php echo $_SERVER['PHP_SELF']; ?> "> 
	<p>
		First Name: 
		<input type="text" name ="first">  <br><br>
		
		Second Name: 
		<input type="text" name ="second">  <br><br>
		
		Email: 
		<input type="email" name ="email">  <br><br>
		
		Password: 
		<input type="password" name ="password">  <br><br>
		
		Pol:
		<input type="radio" name ="field1" value="Man"> Man 
		<input type="radio" name ="field2" value="Woman"> Woman <br>
		
      <img src="New3.php?"alt="Code"/><br />
      <input type="text" name="kapcha" /><br />
	  <input type="submit" value ="To submit" name="Button"> 
	  	<br><br>
		</p>
	 </form>
  </body> 
  
	<pre>	
	<?php
	if ( isset($_POST['text']) )//Если передана капча
  {
    $code = $_POST['text']; //Получаем введенную пользователем капчу
  session_start();
    //Сравниваем
    if ( isset($_SESSION['text']) && strtoupper($_SESSION['text']) == strtoupper($code))
      echo 'Correct!';
    else
      echo 'Incorrect!';
	  unset($_SESSION['text']); //Удаляем из сессии код капчи
	  exit();
  }
	
	if ( isset($_SESSION['text']) && strtoupper($_SESSION['text']) == strtoupper($code) )
	{
	if(isset($_POST['Button']))
		{
		echo " <br> <h3><b><i><u>Registration:</u></i></b></h3>";
		echo "<b>First name:". $_POST['first']."<br></b>";
		echo "<b>Second Name:".$_POST['second']."</b><br>";
		echo "<b>Password:".$_POST['password']."</b><br>";
		
		if ($_POST['field1'])  
		
		{
			echo "<b>Pol:".$_POST['field1']."</b><br>";
		}
		else 
		echo "<b>Pol:".$_POST['field2']."</b><br>";
		
		if (preg_match('/^[a-zA-Z0-9_\-.]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-.]+$/',$_POST['mail']))
			echo  "<b>Email:".$_POST['email']."</b><br>";
		else
			echo  "<b>Email: Error </b><br>";
		}
		}
	?>
		</pre>
		</body>
</html>
