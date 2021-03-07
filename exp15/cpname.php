<html>
<center>

<body bgcolor="burlywood">

<br>

<?php

$name=["Rohit sharma","shikar Dhawan","KL Rahul","Virat kohli","Rishab pant","Hardic pandya","R jadeja","R Ashwin","B kumar","J Bhumrha","m shami"];

echo "<h2><u>Cricket Team Players</u></h2>";
echo "<table border=1px>
 <tr><th>Sl No</th>
<th>Name</th>
</tr>";

for($i=0;$i<11;$i++)

{

$sl=$i+1;

echo " <tr><th>$sl</th><th>$name[$i]</th></tr>";

}

echo "</table>";

?>

</body>

</html>