<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="fonts/icomoon/style.css">

  <link rel="stylesheet" href="css/owl.carousel.min.css">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">

  <!-- Style -->
  <link rel="stylesheet" href="css/style.css">

  <title>UITM LIBRARY</title>
  <style>
    .border {
      border-radius: 7px;
      background-color: #EFFCEA;
    }
  </style>
</head>
</body>
<div>
  <?php
  if (isset($_POST['submit'])) {
    echo 'User submitted';
  }
  ?>

</div>

<div class="d-lg-flex half">
  <div class="bg order-1 order-md-2" style="background-image: url('images/bg_1.jpg');"></div>
  <div class="contents order-2 order-md-1">

    <div class="container">
      <div class="row align-items-center justify-content-center">
        <div class="col-md-7">

          <fieldset>
            <center>
              <h1>WELCOME TO <br><b>TUN ABDUL TUN DR.ISMAIL</b></h1>
            </center>
            <h3><br>Login to <strong>UiTM</strong> Library</h3>
            <p class="mb-4">Collection of materials and books that are accessible for student use</p>
            <form action="stu_login.php" method="POST" autocomplete="off">
              <div class="border" style="padding: 10px;">
                <div class="form-group first">
                  <center>
                    <div class="border-bottom">
                      <input type="radio" id="staff" name="login" value="staff" checked="checked">
                      <label for="staff" style="padding-right: 90px;">Staff</label>
                      <input type="radio" id="stud" name="login" value="stud">
                      <label for="stud">Student</label>
                    </div>
                  </center>
                  <div>
                    <br>
                    <label for="username">Username</label>
                    <input type="text" class="form-control" placeholder="Your Username" id="username" name="id" required>
                  </div>
                </div>
                <div class="form-group last mb-3">
                  <label for="password">Password</label>
                  <input type="password" class="form-control" placeholder="Your Password" id="password" name="pass" required>
                </div>
                <div class="d-flex mb-5 align-items-center">
                  <span class="ml-auto"><a href="update_form.php" class="forgot-pass">Forgot Password</a></span>
                </div>
                <input type="submit" value="Log In" class="btn btn-block btn-primary" name="submit">
          </fieldset>
        </div>
        </form>
      </div>
    </div>
  </div>
</div>


</div>



<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>

</body>

</html>