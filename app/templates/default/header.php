<?php
if (!\helpers\session::get('user_id')) {
	header("Location: /");
}
?>
<!DOCTYPE html>
<html>
 <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dehack - B1.0.0.3</title>
  <link href="/app/templates/default/assets/css/bootstrap.css" rel="stylesheet">
  <link href="/app/templates/default/assets/font-awesome/css/font-awesome.css" rel="stylesheet">
  <link href="/app/templates/default/assets/css/plugins/toastr/toastr.min.css" rel="stylesheet">
  <link href="/app/templates/default/assets/js/plugins/gritter/jquery.gritter.css" rel="stylesheet">
  <link href="/app/templates/default/assets/css/animate.css" rel="stylesheet">
  <link href="/app/templates/default/assets/css/style.css" rel="stylesheet">
  <link href="/app/templates/default/assets/css/terminal.css" rel="stylesheet">
 </head>
 <body>
 <div id="wrapper">
  <nav class="navbar-default navbar-static-side" role="navigation">
   <div class="sidebar-collapse">
    <ul class="nav" id="side-menu">
     <li class="nav-header">
      <div class="dropdown profile-element">
       <span>
        <img alt="image" class="img-circle" src="/app/templates/default/assets/img/2_small.jpg" />
       </span>
       <a data-toggle="dropdown" class="dropdown-toggle" href="#">
        <span class="clear">
         <span class="block m-t-xs">
          <strong class="font-bold"><?php echo $data['user']->getUsername(); ?></strong>
         </span>
         <span class="text-muted text-xs block">Leader <b class="caret"></b></span>
        </span>
       </a>
       <ul class="dropdown-menu animated fadeInRight m-t-xs">
        <li><a href="/profile/<?php echo $data['user']->getId(); ?>">Profile</a></li>
        <li><a href="contacts.html">Friends</a></li>
        <li><a href="mailbox.html">Messages</a></li>
        <li class="divider"></li>
        <li><a href="login.html">Logout</a></li>
       </ul>
      </div>
      <div class="logo-element">
       DH
      </div>
     </li>
     <li<?php if($_SERVER['REQUEST_URI'] == "/home") { echo " class='active'"; } ?>>
      <a href="/"><i class="fa fa-home"></i> <span class="nav-label">Home</span></a>
     </li>
     <li<?php if($_SERVER['REQUEST_URI'] == "/processes") { echo " class='active'"; } ?>>
      <a href="/processes"><i class="fa fa-bars"></i> <span class="nav-label">Processes</span></a>
     </li>
     <li<?php if($_SERVER['REQUEST_URI'] == "/files") { echo " class='active'"; } ?>>
      <a href="/files"><i class="fa fa-folder-open"></i> <span class="nav-label">File Manager</span></a>
     </li>
     <li<?php if($_SERVER['REQUEST_URI'] == "/browser") { echo " class='active'"; } ?>>
      <a href="/browser"><i class="fa fa-globe"></i> <span class="nav-label">Internet</span></a>
     </li>
    </ul>
   </div>
  </nav>
  <div id="page-wrapper" class="gray-bg dashbard-1">
   <div class="row border-bottom">
    <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
     <div class="navbar-header">
      <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
     </div>
     <ul class="nav navbar-top-links navbar-right">
      <li>
       <span class="m-r-sm text-muted welcome-message"><?php echo $data['user']->getIp(); ?></span>
      </li>
      <li>
       <a href="login.html">
        <i class="fa fa-sign-out"></i> Log out
       </a>
      </li>
     </ul>
    </nav>
   </div>