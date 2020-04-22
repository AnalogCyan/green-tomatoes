
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
        <li><a href="about.php">About</a></li>
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
    <form action="/action_page.php">
      <div class="container">
        <br><br><br>
        <h1>Reserve a Room</h1>
        <p>Please fill this form to reserve a room.</p>
        <hr>
		<label for="Fname"><b>First Name</b></label>
        <input type="text" placeholder="First Name" name="Fname" required>
		  <label for="Lname"><b>Last Name</b></label>
        <input type="text" placeholder="Last Name" name="Lname" required>
        <label for="email"><b>Email</b></label>
        <input type="text" placeholder="Email" name="email" required>
		  <label for="Phone"><b>Phone</b></label>
        <input type="text" placeholder="Phone Number" name="phone" required>
		    <label for="checkin"><b>Check-in</b></label>
        <input type="text" placeholder="MM/DD/YY" name="checkin" required>
		    <label for="checkout"><b>Check-out</b></label>
        <input type="text" placeholder="MM/DD/YY" name="checkin" required>
		      <label for="cottage"><b>Cottage</b></label>
        <input type="text" placeholder="Choose a Cottage" name="cottage" required>
		   
        
        <hr>


        <button type="submit" class="registerbtn saveinfobtn">Save Info</button>
      </div>

   
    </form>
  </main>

</body>

</html>
