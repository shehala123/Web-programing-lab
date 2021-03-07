<!DOCTYPE html>

<head>
	<title>PHP - Calculate Electricity Bill</title>
</head>



<body align="center">
	
		<h1>Php - Calculate Electricity Bill</h1>

		<form action="" method="post" >
<table align="center">
<tr><th>Consumer Name:</th><th> <input type="text" name="name" id="name"  /><th></tr>
<tr><th>consumer Number:</th><th><input type="text" name="number" id="number"  /><th></tr>
<tr><th>Unit used:</th><th><input type="number" name="units" id="units"  /></th></tr>
<tr><th colspan="2"><input type="submit" name="Submit"  value="Submit" id="Submit"/></th></tr>
</table></form>

		
	
<?php
if(isset($_POST['Submit'])){ 
/**
 * To calculate electricity bill as per unit cost
 */
$unit=$_POST['units'];
  if($unit<=100)

        $amount=3*$unit;

    elseif($unit<=200)

        $amount=4*$unit;
 
   elseif($unit<=300)
   
     $amount=5*$unit;
 
   else
 
       $amount=6*$unit;
   echo "<h3>Result</h3>";
   echo "Consumer Name = ".$_POST['name']."<Br>";
   echo "Consumer Number = ".$_POST['number']."<Br>";
   echo "Amount = ".$amount;
}


?>
</body>
</html>