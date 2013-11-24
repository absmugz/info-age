<!DOCTYPE html>
<html>
  <head>
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
   
    
    <link href="<?php echo base_url('css/bootstrap.min.css'); ?>" type="text/css" rel="stylesheet" />
    <link href="<?php echo base_url('css/signin.css'); ?>" type="text/css" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="../../assets/js/html5shiv.js"></script>
      <script src="../../assets/js/respond.min.js"></script>
    <![endif]-->
  </head>
 <body>

   <?php if (!$error == 1) { ?>
    <p>Your username / password did not match.</p>
<?php } ?>


<div class="container">

    <form class="form-signin" action="http://localhost:8080/info-age/index.php/admin/users/login/" method="post">
        <h2 class="form-signin-heading">Please Login</h2>
        <input name="username" type="text" class="form-control" placeholder="Username" required autofocus>
        <input name="password" type="password" class="form-control" placeholder="Password" required>

        <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
    </form>

</div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->


