
  <?php 
  session_start();
  require_once("lib/contactus.php");
  if(!empty($_POST['email'])){
      $email=$_POST['email'];
      $password=$_POST['your_pass'];
     $res= $object1->login($email,$password);
  
     if(!empty($res)){
         $_SESSION['user']=$res;
         header("LOCATION:index.php");
     }
     else{
        print_r($res);
     }
  }
  ?>   
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Login</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="back/fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="back/css/style.css">
</head>
<body>
<div class="main">
        <!-- Sing in  Form -->
        <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="back/images/signin-image.jpg" alt="sing up image"></figure>
                    </div>

                    <div class="signin-form">
                        <h2 class="form-title">Login</h2>
                        <form  action="login.php" method="POST" class="register-form" id="login-form">
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email" placeholder="Your Email"/>
                            </div>
                            <div class="form-group">
                                <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="your_pass" id="your_pass" placeholder="Password"/>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signin" id="signin" class="form-submit" value="Log in"/>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
  </div>
    <!-- JS -->
    <script src="back/vendor/jquery/jquery.min.js"></script>
    <script src="back/js/main.js"></script>
</body>
</html>