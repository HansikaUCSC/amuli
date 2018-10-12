<!DOCTYPE html>
<html>
<head>

  <!-- import css files -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/nav.css">

</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top" style="margin-bottom: 0;">
  <div class="container-fluid">

    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" style="padding-top: 0px;" href="<?php echo base_url();?>index.php/Home/index">
      <img class="img" src=<?php echo base_url();?>assets/images/logo.png></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Service</a></li>
        <li><a href="#">Log in</a></li>
        <li><a href="#">Sign up</a></li>
      </ul>
    </div>

  </div>

</nav>
</body>
</html>