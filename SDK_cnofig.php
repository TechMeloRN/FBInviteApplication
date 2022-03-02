 <?php
 session_start();
 // importing facebook sdk from vendor
 require_once __DIR__ . '/vendor/autoload.php';

 $fb = new Facebook\Facebook([
 'app_id' => '967801183834945',
 'app_secret' => '62071bc3ee007beeb2acc68814c7f850',
 'default_graph_version' => 'v2.10'
 ]);

 $helper = $fb->getRedirectLoginHelper();

 $permissions = ['email']; // Optional permissions
 $loginUrl = $helper->getLoginUrl('http://localhost/phpfbapi/callback.php', $permissions);
 ?>