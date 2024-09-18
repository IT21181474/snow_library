<?php
include('header.php');
include('connection.php');

extract($_REQUEST);
if(isset($send))
{
mysqli_query($con,"insert into feedback values('','$n','$e','$mob','$msg')");	
$msg= "<h4 style='color:green;'>Feedback Sent Successfully</h4>";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback</title>
</head>

<body class="bg">
  <div class="container">
    <!-- start #header -->
    <header id="header">
      <!-- start #menu -->
      <?php
      include('navbar.php')
      ?>
      <!-- end #menu -->
    </header>
    <!-- end #header -->

    <!-- start main -->
    <main>
      <!-- start banner -->
      <?php include('banner.php') ?>
      <!-- end banner -->
      <div class="col-md-12">
                        <h3 class="master-room borderrr text-center">Feedback</h3></div>
      <!-- start feedback -->
      <section class="container mt-5">
        <div class="row">
          <center><div class="col-md-6 forms">
            <h3>Queries</h3>
            <?php echo @$msg; ?>
            <!-- <div class="container justify-content-center align-items-center my-3">
                            <p>Name: &nbsp; <input type="text"></p>
                            <p>Phone: &nbsp; <input type="number"></p>
                            <p>Email: &nbsp; <input type="email"></p>
                            <p>Comments: &nbsp; <input type="text"></p>
                        </div>  -->
            <form action="#" method="post"><br>
              <div class="form-group">
                <input type="text" name="n" class="form-control" id="#" placeholder="Enter Your Name" required>
              </div>
              <div class="form-group">
                <input type="Email" name="e" class="form-control" id="#" placeholder="Email" required>
              </div>
              <div class="form-group">
                <input type="text" name="mob" class="form-control" id="#" placeholder="Mobile Number" required>
              </div>
              <div class="form-group">
                <textarea type="Text" name="msg" class="form-control" id="#" placeholder="Comments" required></textarea>
              </div>
              <input type="submit" value="Submit" name="send" class="btn btn-primary btn-group-justified" required>
            </form>
          </div></center>
        </div>
      </section>
      <!-- end feedback -->
    </main>
    <!-- end main -->
    <?php
        include('footer.php')
        ?>
    
    </body>
</html>