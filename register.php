<?php include('server.php') ?>
<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="./style.css" />
</head>

<body>
  <header>
    <h1><a id="green">Green </a><a id="red">Tomatoes</a></h1>
    <nav>
      <ul id="horizontal-list">
        <li><a href="index.php" class="active">Home</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="login.php">Login</a></li>
      </ul>
      <h1>
        <button type="button" id="menu" onclick="mobiMenuOpen()">
          <i class="fas fa-bars"></i>
        </button>
      </h1>
    </nav>
    <div id="mobiMenu">
      <h1 id="red"><i class="fas fa-seedling"></i></h1>
      <h1 id="menuClose"><i class="fas fa-times" onclick="mobiMenuClose()"></i></h1>
    </div>
  </header>
  <main>
    <form method="post" action="register.php">
	<?php include('errors.php'); ?>
      <div class="container">
        <br><br><br>
        <h1>Register</h1>
        <p>Please fill in this form to create an account.</p>
        <hr>

        <label for="email"><b>Email</b></label>
        <input type="text" placeholder="Enter Email" name="email" required value="<?php echo $email; ?>">

        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="psw" required>

        <label for="psw-repeat"><b>Repeat Password</b></label>
        <input type="password" placeholder="Repeat Password" name="psw-repeat" required>
        <hr>


        <button type="submit" class="registerbtn" name="submit">Register</button>
      </div>

      <div class="container signin">
        <p>Already have an account? <a href="./login.html">Sign in</a>.</p>
      </div>
    </form>
  </main>

</body>

</html>