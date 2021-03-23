<!DOCTYPE html>
<html>
<head>
<title> 1st Lab Task </title>
</head>
 
<body>
<h1>Registration</h1>

<form>
<table>
<tr>
<td>Name : </td>
 <td><input type="text" id="f" name="fname" ></td></tr>
<tr>
<td>Email: </td>
 <td><input type="text" id="e" name="ename"></td></tr>
 <tr> 
<td>User Name : </td> 
 <td><input type="text" id="l" name="lname"></td>
 </tr>
  
<td>Password: </td>
<td><input type="password" id="p" name="pname"></td></tr>
<td>Conform Password: </td>
<td><input type="password" id="c" name="cname"></td></tr>
 
 <tr>
<td>Gender<td></tr>
<tr>
<td><input type="radio" id="male" name="Gender" value="m"> 
Male</td>
<td><input type="radio" id="female" name="Gender" value="f">
Female</td>
<td><input type="radio" id="other" name="Gender" value="o">
Other</td> </tr>
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