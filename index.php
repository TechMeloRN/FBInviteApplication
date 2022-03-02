<?php
       // importing main configuration
       require 'SDK_cnofig.php';
?>
<!doctype html>
<html lang="en">

<head>
       <!-- Required meta tags -->
       <meta charset="utf-8">
       <meta name="viewport" content="width=device-width, initial-scale=1">

       <!-- Bootstrap CSS -->
       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
              integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
              crossorigin="anonymous">

       <title>facebook api</title>
</head>

<body>
       <div class="container">
              <!-- flash messages -->
              <?php
                     if(isset($_SESSION['session'])) {
                     $message = $_SESSION['session'];
                     
                     echo '<div class="alert alert-success" role="alert">'
                                   .$message.
                     '</div>';
                     } 
                     unset($_SESSION['session']);
                     ?>

              <div class="row mt-5">
                     <div class="col-3"></div>
                     <div class="col-6">
                            <div class="card">
                                   <div class="card-body">
                                          <form class="form-signin">

                                                 <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
                                                 <label for="inputEmail" class="sr-only">Email address</label>
                                                 <input type="email" id="inputEmail" class="form-control"
                                                        placeholder="Email address" required autofocus>
                                                 <label for="inputPassword" class="sr-only">Password</label>
                                                 <input type="password" id="inputPassword" class="form-control"
                                                        placeholder="Password" required>
                                                 <div class="checkbox mb-3">
                                                        <label>
                                                               <input type="checkbox" value="remember-me"> Remember me
                                                        </label>
                                                 </div>
                                                 <button class="btn btn-lg btn-primary btn-sm btn-block"
                                                        type="submit">Sign
                                                        in</button>

                                          </form>
                                          <!-- friends invite button -->
                                          <?php 
                            echo '<a class="justify-content-center" href="' . $loginUrl . '"
                                   class="btn btn-facebook btn-user btn-block">
                                   <img style="margin-left:20%;" width="60%"
                                          src="https://www.pngkit.com/png/detail/190-1905592_login-with-facebook-button-png-facebook-login-button.png"
                                          alt="Login With Facebook Button Png - Facebook Login Button Transparent@pngkit.com">
                            </a>'
                            ?>
                                   </div>
                            </div>



                     </div>

              </div>
              <div class="col-3"></div>

       </div>

       </div>

       <!-- Bootstrap Bundle with Popper -->
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
              integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
              crossorigin="anonymous"></script>
</body>

</html>