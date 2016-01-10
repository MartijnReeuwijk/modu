
CLIENT ID	63a897dc82834f0c843446712f5c2417
CLIENT SECRET	7a929de78b814b55847d05cc5e54f95e

Token 195054188.3921edb.d3b3de99893a4afe82350bf79c5850d2

Your token is: 195054188.ab103e5.cc67aa675239461f99b285815da233b8
Your user ID is: 195054188



WEBSITE URL	http://www.meierijsantpoort.nl/
REDIRECT URI	http://www.meierijsantpoort.nl/
SUPPORT EMAIL	m.reeuwijk@live.nl


Scope code=5070bb39e5554e3c9bd09a364312f423



<?php
  // Supply a user id and an access token
  $userid = "63a897dc82834f0c843446712f5c2417";
  $accessToken = "195054188.3921edb.d3b3de99893a4afe82350bf79c5850d2";

  // Gets our data
  function fetchData($url){
       $ch = curl_init();
       curl_setopt($ch, CURLOPT_URL, $url);
       curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
       curl_setopt($ch, CURLOPT_TIMEOUT, 20);
       $result = curl_exec($ch);
       curl_close($ch);
       return $result;
  }

  // Pulls and parses data.
  $result = fetchData("https://api.instagram.com/v1/users/{63a897dc82834f0c843446712f5c2417}/media/recent/?access_token={195054188.3921edb.d3b3de99893a4afe82350bf79c5850d2}");
  $result = json_decode($result);
?>


<?php foreach ($result->data as $post): ?>
  <!-- Renders images. @Options (thumbnail,low_resoulution, high_resolution) -->
  <a class="group" rel="group1" href="<?= $post->images->standard_resolution->url ?>"><img src="<?= $post->images->thumbnail->url ?>"></a>
<?php endforeach ?>
