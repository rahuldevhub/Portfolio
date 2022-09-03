<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="bootstrap-5.0.2-dist/bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/i.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <title>Fetch</title>
    <script src="jquery-3.6.0.min.js"></script>
</head>
<body>
  <div class="navbar">
    <span class="navbar-brand mb-0 px-3 h1 "><a href="#"><img src="/nav.jpg" alt="nav"></a> <span id="f"> Fetch</span></span>
    <div id="link">
      <svg xmlns="http://www.w3.org/2000/svg" id="ham" width="16" height="16" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
      </svg>
      <div id="l">
        <div id="l1">
          <ul id="ul">
        <?php
        if(!isset($_SESSION['name'])){
        ?>
            <li id="li"><a href="./login.php">Login</a></li>
            <li id="li"><a href="./register.php">Register</a></li>
        <?php
        }
        else{
        ?>
            <li id="li"><a href="./profile.php" id="profile"><?php echo $_SESSION['name'];?></a></li>
            <li id="li"><a href="./index.php" id="logout">logout</a></li>';
        <?php
        }
        ?>
          </ul>
        </div>
      </div>
    </div> 
  </div>
  <div class="main text-center">
    <div class="main12">
      <div class="main1 text-center"> </div>
    </div>
    <div class="main12">
      <div class="main2 text-center"></div>
    </div>
    <div class="main3">
      <a href=""></a>
      <a href=""></a>
      <a href=""></a>
      <a href=""></a>
    </div>
  </div>
  <script src="/bootstrap-5.0.2-dist/bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>
  <script>
    $('#ham').click(function(){
      $('#l').toggle();
    })
    $('#logout').click(function(){
      <?php
      session_destroy(); 
      ?>
    })
    $('#profile').click(function(){
      <?php
      session_commit(); 
      ?>
    })
  </Script>
</body>
</html>