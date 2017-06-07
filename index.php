<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Php Calculator</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>

<body>

<h1 class="title"><script src="js.js"></script></h1>
<div class="input">
<form>
	<input type="number" name="number1" placeholder="1st value" class="inputfield">
	<select name="select" class="selectbtn" >
		<option>None</option>
		<option>+</option>
		<option>-</option>
		<option>*</option>
		<option>/</option>
	</select>
	
	
<input type="number" placeholder="2nd value" name="number2" class="inputfield">

<div class="btn">
<button type="submit" name="submit" value="submit" class="selectbtn" >Submit</button>
<input type="reset" value="Reset" class="selectbtn">
  </div>
</form>
<p class="para">Your Answer is:</p>
<div class="calculator">
<?php 
	if (isset($_GET['submit'])){
		$result1 = $_GET['number1'];
		$result2 = $_GET['number2'];
		$select = $_GET['select'];
		
		switch ($select){
		
				
			case "+":
				echo $result1 + $result2;
				break;
				
			case "-":
				echo $result1 - $result2;
				break;
				
			case "*":
				echo $result1 * $result2;
				break;
				
			case "/":
				echo $result1 / $result2;
				break;
				
			
		};
		
		
		if ($result1 < $result2){	
		echo "<br>
 $result1 smaller than $result2  ";
	}
		
		if ($result1 > $result2){	
		echo "<br>
 $result1 bigger than $result2 ";
	}
		
		if ($result1 == $result2){	
		echo "<br>
 $result1 and $result2 are equal ";
	}
	
		
		
		
		if (empty($result1)){
			echo "<br>
1st Field Is Empty";
		
		}
		
		if (empty($result2)){
			echo "<br>
2nd Field Is Empty";	}
		
		
	}
	
	?>
	
	</div>
	<footer class="footer">
				<hr>
					<font>Developed By 
						<a href="https://facebook.com/nabeel.goraya" target="_blank">Nabeel Goraya</a>
					</font>
				<hr>
</footer>

</body>
</html>
