<?php
set_time_limit(0);
date_default_timezone_set('UTC');
require __DIR__.'/../vendor/autoload.php';
/////// CONFIG ///////
$username = 'username';
$password = 'password';
$debug = true;
$truncatedDebug = false;

//new \InstagramAPI\Instagram::$allowDangerousWebUsageAtMyOwnRisk = true;
$ig = new \InstagramAPI\Instagram($debug, $truncatedDebug);
try {
  $log = $ig->login($username, $password);
	$userId = $ig->people->getUserIdForName('username');
	
	 $suggest = $ig->people->getSuggestedUsers($userId);
		echo "<br><br><br><br><br><br><br><br><br><br><br><br>";
		echo "Suggested Users<br>";
		echo $suggest;
		
/**		foreach ($suggest as $item) {
		//	$usernames     = get_object_vars($item);
		}
**/
} catch (\Exception $e) {
   echo 'Something went wrong: '.$e->getMessage()."\n";
   exit(0);
}

?>
