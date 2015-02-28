<!DOCTYPE html>
<html>
 <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dehack | Login</title>
  <link href="/app/templates/default/assets/css/bootstrap.min.css" rel="stylesheet">
  <link href="/app/templates/default/assets/font-awesome/css/font-awesome.css" rel="stylesheet">
  <link href="/app/templates/default/assets/css/animate.css" rel="stylesheet">
  <link href="/app/templates/default/assets/css/style.css" rel="stylesheet">
 </head>
 <body class="gray-bg">
  <div class="middle-box text-center loginscreen animated fadeInDown">
   <div>
    <div>
     <h1 class="logo-name">DH</h1>
    </div>
    <h3>Welcome to DH</h3>
    <p>
     <?php echo $data['welcome']; ?>
    </p>
    <p>Login in to see it in action.</p>
    <form class="m-t" role="form" method="post" action="/login">
     <div class="form-group">
      <input type="text" name="username" class="form-control" placeholder="Username" required="">
     </div>
     <div class="form-group">
      <input type="password" name="password" class="form-control" placeholder="Password" required="">
     </div>
     <button type="submit" name="login" class="btn btn-primary block full-width m-b">Login</button>
     <a href="#"><small>Forgot password?</small></a>
     <p class="text-muted text-center"><small>Do not have an account?</small></p>
     <a class="btn btn-sm btn-white btn-block" href="register.html">Create an account</a>
    </form>
   </div>
  </div>
  <script src="/app/templates/default/assets/js/jquery-2.1.1.js"></script>
  <script src="/app/templates/default/assets/js/bootstrap.min.js"></script>
 </body>
</html> 