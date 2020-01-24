<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="images/favicon.ico" type="image/ico" />
    <title>Gentelella Alela! | </title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url().'/vendors/bootstrap/dist/css/bootstrap.min.css'?>" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo base_url().'/vendors/font-awesome/css/font-awesome.min.css'?>" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo base_url().'/vendors/nprogress/nprogress.css'?>" rel="stylesheet">
    <!-- Animate.css -->
    <link href="<?php echo base_url().'/vendors/animate.css/animate.min.css'?>" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?php echo base_url().'/build/css/custom.min.css'?>" rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <?php echo form_open('auth/login');?>
              <h1>Login Form</h1>
              <div>
                <input name="username" type="text" class="form-control" placeholder="Username" required="" />
              </div>
              <div>
                <input name="password" type="password" class="form-control" placeholder="Password" required="" />
              </div>
              <div>
                <!-- <a class="btn btn-default submit" href="index.html">Log in</a> -->
                <!-- <button class="btn btn-default submit" type="submit">Login</button> -->
                <input type="submit" name="submit" onclick="myFunction()" value="LOGIN" >
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">New to site?
                  <a href="#signup" class="to_register"> Create Account </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-paw"></i> Gentelella Alela!</h1>
                  <p>©2016 All Rights Reserved. Gentelella Alela! is a Bootstrap 3 template. Privacy and Terms</p>
                </div>
            </form>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>