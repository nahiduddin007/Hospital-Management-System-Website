<!DOCTYPE html>
<html>
<head>
  <title>Sign-Up/Login Form</title>
  <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel="stylesheet" href="css_login/style.css"> 
</head>

<body>
<h4><a href="home.php">Home</a></h4>
  <div class="form">
      
      <ul class="tab-group">
        <li class="tab active"><a href="#signup">Sign Up</a></li>
        <li class="tab"><a href="#login">Log In</a></li>
      </ul>
      
      <div class="tab-content">
        <div id="signup">





          <h1>Admin Login</h1>
          
          <form action="registration.php" method="post">
          
          <div class="top-row">
            <div class="field-wrap">
              <label>
                First Name<span class="req">*</span>
              </label>
              <input type="text" required autocomplete="off" name="fname" />
            </div>
        
            <div class="field-wrap">
              <label>
                Last Name<span class="req">*</span>
              </label>
              <input type="text"required autocomplete="off" name="lname" />
            </div>
          </div>

          <div class="field-wrap">
            <label>
              Email Address<span class="req">*</span>
            </label>
            <input type="email"required autocomplete="off" name="email" />
          </div>
          
          <div class="field-wrap">
            <label>
              Set A Password<span class="req">*</span>
            </label>
            <input type="password"required autocomplete="off" name="password" />
          </div>
          
          <button type="submit" class="button button-block" name="btn_signup"><a href="index_login.php">
            
          </a>Sign Up</button>
          
          </form>

        </div>
        


        
        <div id="login">   
          <h1>Welcome Back!</h1>
          
          <form action="validation.php" method="post">
          
           <div class="field-wrap">
            <label>
              Email Address<span class="req">*</span>
            </label>
            <input type="email"required autocomplete="off" name="email" />
           </div>
          
          <div class="field-wrap">
            <label>
              Password<span class="req">*</span>
            </label>
            <input type="password"required autocomplete="off" name="password" />
          </div>
          
          <p class="forgot"><a href="#">Forgot Password?</a></p>
          
          <button class="button button-block" name="btn_login"/>LogIn</button>
          
          </form>

        </div>
        
      </div><!-- tab-content -->
      
</div> <!-- /form -->
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script  src="js2/index.js"></script>

</body>
</html>
