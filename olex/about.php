<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Olex.com</title>
  <script src="jquery-3.2.1.min.js"></script>
  <link rel="stylesheet" href="main.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
    crossorigin="anonymous">
  <link rel="shortcut icon" type="img" href="img/favicon.jpg">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg"
    crossorigin="anonymous">
</head>

<body>
  <!--<div class="status"></div>

  <!--Nav Bar  -->
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"
          aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a href="index.html" target="_blank">
          <img id="logo" src="img/l.jpg" alt="logo">
        </a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li class="active">
            <a href="index.html">HOME
              <span class="sr-only"></span>
            </a>
          </li>
          <li>
            <a href="gallery.html">GALLERY</a>
          </li>
          <li>
            <a href="about.php">CONTACT US</a>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">SERVICES
              <span class="caret"></span>
            </a>
            <ul class="dropdown-menu" aria-labelledby="dLabel">

              <li>
                <a href="#">Web Development</a>
              </li>
              <li>
                <a href="#">CAD drawings</a>
              </li>
              <li>
                <a href="#">Database</a>
              </li>
              <li role="separator" class="divider"></li>

            </ul>
          </li>

          <a href="https://www.instagram.com/olex_web/" target="_blank" style="font-size:3em; color:rgb(32, 100, 145)">
            <i class="fab fa-instagram"></i>
          </a>
          <a href="https://twitter.com/?lang=en" target="_blank" style="font-size:3em; color:rgb(32, 100, 145)">
            <i class="fab fa-twitter-square"></i>
          </a>
          <a href="https://en-gb.facebook.com/login/" target="_blank" style="font-size:3em; color:rgb(32, 100, 145)">
            <i class="fab fa-facebook-square"></i>
          </a>
        </ul>

        <div class="contacts" style="float: right">
          <h4>
            <span class="email">email:</span>
            <a href="mailto:olex@gmail.com" target="_self">olex@gmail.com</a>
          </h4>
          <h4>
            <span class="phone">phone: 732-687-7158 </span>
          </h4>
        </div>
      </div>
      <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
  </nav>
  <div class="container">

    <h2>Contact Us Today!</h2>
    <br>
    <br>
    <form action="index.php" method="post">
      <input type="hidden" name="action" value="process_data" autofocus>
      <div>
        <label for="name">Full Name:</label>
        <input type="text" name="name" autofocus value="<?php echo htmlspecialchars($name); ?>">
      </div>
    
      <div>
        <label for="email">E-mail:</label>
        <input type="text" name="email" value="<?php echo htmlspecialchars($email); ?>">
      </div>
      <div>
        <label for="phone">Phone:</label>
        <input type="text" name="phone" value="<?php echo htmlspecialchars($phone); ?>">
      </div>
      <div>
        <label for="msg">Comments:</label>
        <textarea id="msg" name="user_message"></textarea>
      </div>
      <div class="button">
        <button type="submit">Submit</button>
      </div>
    
    </form>
    <h2>Message:</h2>
    <p>
      <?php echo nl2br(htmlspecialchars($message)); ?>
    </p>
    </div>
    </div>

  
<footer class="ft">
    <p>&copy; 2018 olex.com All Right Recerved</p>
</footer>
  </div>
    

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="jquery/jquery.js"></script>
    <script type="text/javascript" src='js/bootstrap.min.js'></script>



    <script src="main.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
      crossorigin="anonymous"></script>
   
</body>

</html>