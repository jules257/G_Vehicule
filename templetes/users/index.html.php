<?php //session_start(); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="Style.css">
  </head>
  <body class="bodylog">
<form action="index.php?controller=user&task=login" method="POST">
<div class="login-box">
 <center> Authentification</center> 
  <div class="textbox">
    <i class="fas fa-user"></i>
    <input class="inputlog" type="text" name="username" required placeholder="Username">
  </div>

  <div class="textbox">
    <i class="fas fa-lock"></i>
    <input class="inputlog" type="password" name="password" required placeholder="Password">
  </div>

 <center><input type="submit" class="inputlog" class="button" title="Log In" name="login" value="Connexion"/></center> 
</div>
</form>
  </body>
</html>

</body>
</html>
<script>
function myFunction(){
  var kkk=document.getElementById('kkk');
  kkk.style.display="block";
}
    </script>