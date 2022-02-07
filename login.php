
<?php
 include('partials-front/menu.php');

 ?>
<?php 

include('config/constants.php');
 ?>
<?php
if(isset($_POST['login']))
{
$email=$_POST['email'];
$password=md5($_POST['password']);
$sql="SELECT * from tblusers where EmailId='$email' and password='$password'";
echo $sql;
$r=mysqli_query($conn,$sql);

if(mysqli_num_rows($r)>0)
  {
  $res=mysqli_fetch_assoc($r);
// $sql ="SELECT EmailId,Password,FullName FROM tblusers WHERE EmailId=:email and Password=:password";
// $query= $dbh -> prepare($sql);
// $query-> bindParam(':email', $email, PDO::PARAM_STR);
// $query-> bindParam(':password', $password, PDO::PARAM_STR);
// $query-> execute();
// $results=$query->fetchAll(PDO::FETCH_OBJ);
// if($query->rowCount() > 0)

$_SESSION['login']=$_POST['email'];
$_SESSION['fname']=$res[' FullName'];
$currentpage=$_SERVER['REQUEST_URI'];
echo "<script type='text/javascript'> document.location = '/food-order'; </script>";
} else{
  
  echo "<script>alert('Invalid Details');</script>";

}

}

?>
<html>
  <head>
    <!-- <link rel="stylesheet" href="css/style.css"> -->
  </head>
  <body>
    

 <section  class="food-search" style="background-image: url('images/doc.jpg');" >
   <div class="modal-footer text-center">
<div class="modal fade" id="loginform">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h3 class="modal-title">Login</h3>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="login_wrap">
            <div class="col-md-12 col-sm-6">
              <form method="post">
                <div class="form-group">
                  <input type="email" class="form-control" name="email" placeholder="Email address*">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control" name="password" placeholder="Password*">
                </div>
                <div class="form-group checkbox">
                  <input type="checkbox" id="remember">remember me
               
                </div>
                <div class="form-group">
                  <input type="submit" name="login" value="Login" class="btn btn-block">
                </div>
              </form>
            </div>
           
          </div>
        </div>
      </div>
        <p>Don't have an account? <a href="registration.php" data-toggle="modal" data-dismiss="modal">Signup Here</a></p>
        <p><a href="forgotpassword.php" data-toggle="modal" data-dismiss="modal">Forgot Password ?</a></p>
      </div>
    </div>
  </div>
</div>
</section>
  </body>
</html>
