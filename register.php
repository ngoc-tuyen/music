<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
	<link href="register.css" rel="stylesheet" type="text/css" />
</head>

<body>
	<div class="register_box">
  <form method = "post" action="" enctype="multipart/form-data">
    <table align="left" width="70%">
      <tr align="left">
        <td colspan="4"><h2>Register.</h2>
          <br />
          <span> Already have account? <a href="login.php">Login Now.</a><br />
          <br />
          </span></td>
      </tr>
      <tr>
        <td width="15%"><b>UserName:</b></td>
        <td colspan="3"><input type="text" name="username" required placeholder="UserName" /></td>
      </tr>
      <tr>
        <td width="15%"><b>Password:</b></td>
        <td colspan="3"><input type="password" id="password_confirm1" name="password" required placeholder="Password" /></td>
      </tr>
      <tr>
        <td width="15%"><b>Confirm Password:</b></td>
        <td colspan="3"><input type="password" id="password_confirm2" name="confirm_password" required placeholder="Confirm Password" />
      </tr>
      <tr align="left">
        <td></td>
        <td colspan="4"><input type="submit" name="register" value="Register" /></td>
      </tr>
    </table>
  </form>
</div>
	<?php
$con = new mysqli('localhost', 'root', '', 'sdlc');
if (!$con) {
    echo "ket noi that bai";
}
if (isset($_POST['register'])) {
    if (!empty($_POST['UserName']) && !empty($_POST['Password']) && !empty($_POST['Confirm_Password'])) {
        $UserName = $_POST['UserName'];
        $Password = $_POST['Password'];
        $confirm_password = $_POST['Confirm_Password'];
        $check_exist = mysqli_query($con, "select * from account where UserName = '$UserName'");
        $username_count = mysqli_num_rows($check_exist);
        $row_register = mysqli_fetch_array($check_exist);
        if ($username_count > 0) {
            echo "<script>alter('Sorry, your username already exist in our database !')</script>";
        } elseif ($row_register['UserName'] != $UserName && $Password == $Confirm_Password) {
            $run_insert = mysqli_query($con, "insert into account values ('$UserName','$Password') ");
            if ($run_insert) {
                echo "<script>alter('Account has been created successfully!')</script>";
                echo "<script>window.open('login.php','_self')</script>";
            }
        }
    }
}
?>
</body>
</html>