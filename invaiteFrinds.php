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

       <title>Hello, world!</title>
</head>

<body>
       <div class="container mt-5">
              <?php

                     if(isset($_SESSION['session'])) {
                     $message = $_SESSION['session'];

                     echo '<div class="alert alert-success" role="alert">'
                            .$message.
                            '</div>';
                               unset($_SESSION['session']);
                     }
                  
                     ?>


              <div class="row mt-5">
                     <div class="col-3"></div>
                     <div class="col-6">
                            <div class="card">
                                   <div class="alert alert-primary m-3 p-1 card-header">

                                          <div class="d-flex justify-content-center p-3 m-3" role="alert">
                                                 <h3>invite your friends...</h3>
                                          </div>

                                   </div>
                                   <div class="mt-5 card-body">

                                          <a style="margin-left: 220px;" href='#' onclick='FacebookInviteFriends();'>
                                                 <img width='150px' src='images/fbinvaiteBTN.png'>
                                          </a>
                                   </div>
                                   <div class="card-footer">
                                          thanks
                                   </div>
                            </div>

                            <div id='fb-root'></div>


                     </div>

              </div>
              <div class="col-3"></div>

       </div>

       </div>
</body>

</html>

<script src="http://connect.facebook.net/en_US/all.js"></script>
<script>
FB.init({
       appId: '914755019207106',
       cookie: true,
       status: true,
       xfbml: true
});

function FacebookInviteFriends() {

       FB.ui({
              method: 'send',
              link: 'http://www.nytimes.com/interactive/2015/04/15/travel/europe-favorite-streets.html',
       }, function(response) {
              console.log(response);
       });
}
</script>
<!-- <div id='fb-root'></div>
<a href='#' onclick='FacebookInviteFriends();'>
       <img width='100%'
              src='https://lh3.googleusercontent.com/-ESoug2foJBs/T-ntmH-Vs3I/AAAAAAAAGIM/FUQoD54w1oQ/s267/bringfriends.png'>
</a> -->