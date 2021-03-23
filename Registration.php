<!DOCTYPE html>
<html>
<head>
<title> Lab Task </title>
</head>
 
<body>
<h1>Registration</h1>
<?php
$validateall=""; 
$validatename="";
$validateemail="";
$validatepass="";
$validateradio="";
$v1 = $v2 = $v3 ="";
if($_SERVER["REQUEST_METHOD"]=="POST")
{

$name1=$_REQUEST["fname"]; 
$name=$_REQUEST["Uname"];
$email=$_REQUEST["email"];
$pass=$_REQUEST["pname"];
$Cpass=$_REQUEST["cname"];
$day= $_REQUEST["dayname"];
$mo=$_REQUEST["moname"];
$y=$_REQUEST["yname"];
if(empty($name1) ||empty($name) ||empty($email) ||empty($pass) ||empty($Cpass)||empty($day||empty($mo)||empty($y)))
{
  $validateall="You must enter all information";
}
else{}
if((strlen($name)<5) ||!preg_match("/([a-z0-9]/./-/_)+$/i", $name))
{
    $validatename="You must enter user name";
}
else
{
    $validatename= "your user name is ".$name;
}
  
if((strlen($pass)<8) ||!preg_match("/[@#$%]+/i", $pass))
{
    $validatename="You must enter password";
}
else
{
    $validatename= "your password is ".$name;
}
if($pass==$Cpass)
{
  $validatepass="Your password does not match";
}
else
{
    $validatepass= "your password is ".$name;
}


if(empty($email) || !preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,6})$/i", $email))
{
    $validateemail="You must enter email";
}
else
{
    $validateemail= "your email is ".$email;
}
 
if(isset($_REQUEST["gender"]))
{
    $validateradio=$_REQUEST["gender"];
}
else{
    $validateradio="Please select an option for gender";
}
}
?>
<form  action ="<?php echo $_SERVER["PHP_SELF"];?> " method="post">
<table>
<tr>
<td>Name : </td>
 <td><input type="text" id="f" name="fname" ></td></tr> 
<tr>
<td>Email: </td>
 <td><input type="text" id="e" name="email"></td></tr><?php echo $validateemail; ?>
 <tr> 
<td>User Name : </td> 
 <td><input type="text" id="l" name="Uname"></td>
 </tr>
 <?php echo $validatename;?>
<td>Password: </td>
<td><input type="password" id="p" name="pname"></td></tr>
<td>Conform Password: </td>
<td><input type="password" id="c" name="cname"></td></tr><?php echo $validatepass; ?>
 
 <tr>
 <?php echo $validateall; ?><br>
<td>Gender<td></tr>
<tr>
<td><input type="radio" id="male" name="gender" value="m"> 
Male</td>
<td><input type="radio" id="female" name="gender" value="f">
Female</td>
<td><input type="radio" id="other" name="gender" value="o">
Other</td> </tr>
<tr>
<?php echo $validateradio; ?><br></tr>
<tr> 
<td> Date Of Birth </td></tr>
<tr>
  <td><input type="text" id="day" name="dayname">/</td>
  <td><input type="text" id="mo" name="moname">/</td>
  <td><input type="text" id="year" name="yname"></td>
  <td>(dd mm yyyy)</td>
 </tr>
 
 

<tr>
<td><input type="submit" value="Submit"></td>
<td><input type="reset" value="Reset"></td>
</table>
</form>

</body> 

</html>