<html>

 <head>

  <title>form</title>

   </head>

<center>

<body bgcolor="aqua">


<h1 style="color:navy;">REGISTRATION FORM</h1>

<form action='' method="POST">

<table>

 <tr>

  <td> Name</td>

  <td> <input type="text" id="fname" name="fname"></td>

 </tr>



 <tr>

  <td> Gender</td>

  <td> <input type="radio" id="gen_m" value='male' name="gen">male<br>
<input type="radio" value='female' id="gen_f" name="gen">female</td>

 </tr>

 
<tr>

  <td> User Name</td>

  <td><input type="text" id="uname" name="uname"> </td>

 </tr>

<tr>

  <td> Password</td>

  <td> <input type="password" id="pass"  name="pass"></td>

 </tr>

<tr>
<tr>

  <td>Confirm Password</td>

  <td> <input type="password" id="cpa" name="cpa"></td>

 </tr>
<tr>

  <td>Email </td>

  <td> <input type="email" id="mail"  name="email"></td>

 </tr>
<tr>

  <td> Mobile</td>

  <td> <input type="phone" id="tel"  name="phone"></td>

 </tr>
<tr>

  <td>City</td>

  <td><select name="district" id="di"  name="dictrict">

  <option value="kozhikode">kozhikode</option>

  <option value="kannur">kannur</option>

  <option value="malapuram">Malapuram</option>

</select>
  </td>

 </tr>

</table>

<br>
<input type="submit" value="Register" name="submit">


</form>


<?php




if(isset($_POST["submit"]))
{

$fname=$_POST["fname"];

$uname=$_POST["uname"];
$pass=$_POST["pass"];

$cpa=$_POST["cpa"];

$mail=$_POST["email"];
$phone=$_POST["phone"];

if($fname==NULL or (!preg_match("/^[a-zA-z]*$/", $fname)))

    echo "<script>alert('Name can not be Empty and Only allows characters and white space');</script>";

elseif(!isset($_POST["gen"]))

    echo "<script>alert(' Please select a gender ');</script>";    

elseif($uname==NULL)

    echo "<script>alert('user name can not be Empty');</script>";


elseif($pass==NULL or strlen($pass)<8) 
   echo "<script>alert(' Password cannot be empty and must contain atleast 8 characters');</script>";

elseif($pass!=$cpa)

    echo "<script>alert(' confirm password incorrect');</script>";

elseif($mail==NULL)

    echo "<script>alert(' Email must not empty ');</script>";

elseif(!filter_var($mail,FILTER_VALIDATE_EMAIL))

    echo "<script>alert(' Email must be valid'); </script>";

elseif($phone==NULL or strlen($phone)!=10)

    echo "<script>alert(' Phone number must not be empty and should contain 10 digits');</script>";

else 
    echo "<script>alert('Successfully Registered');</script>";
}
?>
</body>
</html>
