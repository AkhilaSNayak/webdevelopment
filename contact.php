<?php include('partials-front/menu.php'); ?>
<?php

if(isset($_POST['contentbtn']))
{
$fullname=$_POST['fullname'];
$email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];
$insertquery="insert into contactus(fullname,email,subject,message) values('$fullname','$email',
'$subject','$message')";
$iquery=mysqli_query($conn,$insertquery);
if($iquery)
{?>
<script>
alert("Insertion Succesful");

</script>
<?php
}else{?>
<script>
alert("insertion unSuccesful");

</script>
<?php
}
}
 ?>
<html>
<head>
  <title>contact us</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
   <div class="" style="background-image: url('images/doc.jpg');">
  <div class="col-md-8 block-9 mb-md-5">
            <form action="#" method="post" align="center" class="bg-light p-5 contact-form">
              <div class="form-group">
                <input type="text" class="form-control" name="fullname" placeholder="Your Name">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="email" placeholder="Your Email">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" placeholder="Subject">
              </div>
              <div class="form-group">
                <textarea id="msg" cols="30" rows="7"  type="text" name="message" class="form-control" placeholder="Message"></textarea>
              </div>
              <div class="form-group">
                <input type="submit" name="contentbtn" value="Send Message" class="btn btn-primary py-3 px-5">
              </div>
            </form>
          </div>
          
          </div>
          <?php include('partials-front/footer.php'); ?>
</body>
</html>