<!DOCTYPE html>
<html lang="en">

<?php
if($this->session->userdata('id_login') != '') {

  redirect(base_url('welcome'));
}

$galat = $this->session->flashdata('galat');
?>

<head>
  <meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="ThemeBucket">
  <link rel="shortcut icon" href="assets/images/favicon.ico">

  <title>Login</title>

  <!--Core CSS -->
  <link href="assets/bs3/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/css/bootstrap-reset.css" rel="stylesheet">
  <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="assets/css/style-responsive.css" rel="stylesheet" />
  <style type="text/css">
    .alert p {
      color: red;
    }
  </style>

  <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]>
    <script src="js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>

  <body class="login-body">

    <div class="container">

      <?= form_open(base_url('login'), 'class = "form-signin"'); ?>

      <h2 class="form-signin-heading">LOGIN CROM</h2>
      <div class="login-wrap">
        <div class="user-login-info">
          <?php
          if (validation_errors()!=NULL || $galat != "") {
            echo "<div class='alert alert-danger'>";
            echo validation_errors();
            echo $galat;
            echo "</div>";
          }
          ?>
          <input type="text" class="form-control" placeholder="NIP" autofocus name="nip">
          <input type="password" class="form-control" placeholder="Password" name="password">
        </div>
        <!-- <label class="checkbox"> -->
          <!-- <input type="checkbox" value="remember-me" name="remember-me"> Ingat saya -->
          <span class="pull-right">
            <a data-toggle="modal" href="#myModal"> Lupa Password?</a>
          </span>
        <!-- </label> -->
        <button class="btn btn-lg btn-login btn-block" type="submit" value="Login" name="submit">Log in</button>

      </div>

      <?php echo form_close(); ?>

      <!-- Modal -->
      <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title">Forgot Password ?</h4>
            </div>
            <div class="modal-body">
              <p>Enter your e-mail address below to reset your password.</p>
              <input type="text" name="email" placeholder="Email" autocomplete="off" class="form-control placeholder-no-fix">

            </div>
            <div class="modal-footer">
              <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
              <button class="btn btn-success" type="button">Submit</button>
            </div>
          </div>
        </div>
      </div>
      <!-- modal -->

    </div>



    <!-- Placed js at the end of the document so the pages load faster -->

    <!--Core js-->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/bs3/js/bootstrap.min.js"></script>

  </body>
  </html>
