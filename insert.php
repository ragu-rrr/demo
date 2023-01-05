<?php
include 'connection.php';
if(isset($_POST['submit']))
{
$name=$_POST['name'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$password=$_POST['password'];
$gender=$_POST['gender'];
$sql="insert into `crud`(name,email,mobile,password,gender)values('$name','$email','$mobile','$password','$gender')";
$result=mysqli_query($conn,$sql);
if($result)
{
    echo "Inserted Data Successfully dsfdgfd";
}
else
{
    die(mysqli_error($conn));
}
}
?>
<html>
<head>
  <h2>Insert Form</h2>
</head>
<body>
  <form action="" method="POST">
  <h3>Personal information</h3>
  Name:<br>
  <input type="text" name="name">
  <br><br>
  Email:<br>
  <input type="text" name="email">
  <br><br>
  Mobile:<br>
  <input type="text" name="mobile">
  <br><br>
  Password:<br>
  <input type="text" name="password">
  <br><br>
  Gender:<br>
  <input type="radio" name="gender" value="Male">Male
  <input type="radio" name="gender" value="Female">Female
    <br><br>
    <input type="submit" name="submit" value="submit">
    </form>
</body>
</html>