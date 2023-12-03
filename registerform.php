<form action="action_page.php">
  <div class="container">
    <h1>Social media</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

    <label for="Name"><b>Name</b></label>
    <input type="text" placeholder="Enter Name" name="Name" id="Name" required>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" id="email" required>

    <label for="Contact"><b>Contact</b></label>
    <input type="number" placeholder="Enter Contact" name="contact" id="contact" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" id="psw" required>

    <label for="cnf-repeat"><b>Cofirm Password</b></label>
    <input type="password" placeholder="Confirm Password" name="cnf-repeat" id="psw-confirm" required>
    <hr>

    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
    <button type="submit" class="registerbtn">Register</button>
  </div>

  <div class="container signin">
    <p>Already have an account? <a href="#">Sign in</a>.</p>
  </div>
</form>