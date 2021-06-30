<html>
<body align="center" bgcolor="#00FF00">
<h2>Student Details</h2>
<?php

$con=mysqli_connect('localhost','root','','student');

$sql="SELECT * FROM student1";

$result = mysqli_query($con,$sql);

echo "<table border=1 align=center>";
while($row = mysqli_fetch_array($result)) {

    echo "<tr><td>".$row["Sl.No."]."</td>";
    echo "<td>".$row["Name"]."</td>";
    echo "<td>".$row["Department"]."</td>";
    echo "<td>".$row["Phone_Number"]."</td></tr>";
}
echo "</table>";
?>
</body>
</html>