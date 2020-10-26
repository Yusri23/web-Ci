<?php
session_start(); 
?>
<!DOCTYPE html>
<html>

<head>
	<title>Login</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>

<body style="background-color: black" class="text-white">
<?php 
	
  require 'koneksi.php';
	if (isset($_POST['btnlogin'])){
		$Username = htmlentities(strip_tags(trim($_POST['txtusername'])));
    $Password = htmlentities(strip_tags(trim($_POST['txtpassword'])));

    $Username = mysqli_real_escape_string($link, $Username);
    $Password = mysqli_real_escape_string($link, $Password);

    $Password_sha = sha1($Password);
    $query = "SELECT * FROM user WHERE Username='$Username' AND Password='$Password_sha'";
    $result = mysqli_query($link, $query);

      if (mysqli_num_rows($result) == true) {
        $data = mysqli_fetch_array($result);
        $_SESSION['Status'] = $data['Status'];
        $_SESSION['Username'] = $data['Username'];
        $_SESSION['masuk'] = 1;

    header('location: index.php');
  }else{
    echo "username dan/atau password tidak sesuai";
    }
  }

?>
  
  <div class="row mt-5">
    <div class="col-lg-5 m-auto">
        <div>    
      
      <h4><center>FORM LOGIN</center></h4>

        </div>
<br>
  <form action="" method="post">
    <div class="form-group">
      <label for="">Username</label>
      <input type="text" name="txtusername" required="" class="form-control" >
    </div>
  
  <div class="form-group">
    <label for="">Password</label>
    <input type="password" name="txtpassword" required=""class="form-control">
  </div>

    <input type="submit" name="btnlogin" value="login" class="btn btn-success">
  </form>
    
    </div>
  </div>


</body>
</html>