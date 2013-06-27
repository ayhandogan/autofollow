<?
/*
A simple php script to automatically follow on Twitter.
Checks your followers - whether they follow you around and if not, then you follow them.

version    1.0
(c) Max Makarov (PupkinZade Inc.), 2012, 2013 (http://pupkinzade.tumblr.com)
*/
require_once 'twitter.class.php';
set_time_limit(0);
$consumer_key=""; /* your CONSUMER-KEY */
$consumer_sec=""; /* your CONSUMER-SECRET */
$oauth_tok="";  /* тут ваш OAUTH-TOKEN */
$oauth_sec=""; /* your OAUTH-SECRET */
$numb=50; /* you need to check how many followers. Will follow your readers with the latest. Be aware of the limits of Twitter */
$nik="Twitter_nik"; /* your nickname */


	$connection = new Twitter($consumer_key, $consumer_sec, $oauth_tok, $oauth_sec);

$twitter = $connection->request('followers/ids', 'GET', array('screen_name' => $nik));

for($i=0;$i<$numb;$i++) { 
$follower=$twitter->ids[$i];
$twi = $connection->request('friendships/show', 'GET', array('source_screen_name' => $nik, 'target_id' =>$follower));
$exist=$twi->relationship->target->following;

if($exist=="false") {

$connection->request('friendships/create', 'POST', array('user_id' =>$follower, 'follow' => 'true'));

echo "<li>You follow: ".$follower."</li>";
}
else {
}
}
?>
